
<?php

interface TemplateFactory
{
    public function createProductTemplate(): ProductTemplate;

    public function createPriceTemplate(): PriceTemplate;

    public function createDescriptionTemplate(): DescriptionTemplate;

    public function getRenderer(): TemplateRenderer;
}

class AlbumTemplateFactory implements TemplateFactory
{
    public function createProductTemplate(): ProductTemplate
    {
        return new AlbumTemplateProductTemplate($this->createPriceTemplate(), $this->createDescriptionTemplate());
    }

    public function createPriceTemplate(): PriceTemplate
    {
        return new AlbumTemplatePriceTemplate();
    }

    public function createDescriptionTemplate(): DescriptionTemplate
    {
        return new AlbumTemplateDescriptionTemplate();
    }

    public function getRenderer(): TemplateRenderer
    {
        return new AlbumTemplateRenderer();
    }
}

class ListTemplateFactory implements TemplateFactory
{
    public function createProductTemplate(): ProductTemplate
    {
        return new ListTemplateProductTemplate($this->createPriceTemplate(), $this->createDescriptionTemplate());
    }

    public function createPriceTemplate(): PriceTemplate
    {
        return new ListTemplatePriceTemplate();
    }

    public function createDescriptionTemplate(): DescriptionTemplate
    {
        return new ListTemplateDescriptionTemplate();
    }

    public function getRenderer(): TemplateRenderer
    {
        return new ListTemplateRenderer();
    }
}

interface PriceTemplate
{
    public function getTemplateString(): string;
}

class AlbumTemplatePriceTemplate implements PriceTemplate
{
    public function getTemplateString(): string
    {
        return "
        <small class='text-muted'>Ціна: <?= \$price; ?></small>
        ";
    }
}

class ListTemplatePriceTemplate implements PriceTemplate
{
    public function getTemplateString(): string
    {
        return "
        <p>Ціна: <?= \$price; ?></p>
        ";
    }
}

interface DescriptionTemplate
{
    public function getTemplateString(): string;
}

class AlbumTemplateDescriptionTemplate implements DescriptionTemplate
{
    public function getTemplateString(): string
    {
        return "
        <p class='card-text'><?= \$text; ?></p>
        ";
    }
}

class ListTemplateDescriptionTemplate implements DescriptionTemplate
{
    public function getTemplateString(): string
    {
        return "
        <p><?= \$text; ?></p>
        ";
    }
}

interface ProductTemplate
{
    public function getTemplateString(): string;
}

abstract class BaseProductTemplate implements ProductTemplate
{
    protected $priceTemplate;
    protected $descripTemplate;

    public function __construct(PriceTemplate $priceTemplate, DescriptionTemplate $descripTemplate)
    {
        $this->priceTemplate = $priceTemplate;
        $this->descripTemplate = $descripTemplate;
    }
}

class AlbumTemplateProductTemplate extends BaseProductTemplate
{
    public function getTemplateString(): string
    {
        $renderedPrice = $this->priceTemplate->getTemplateString();
        $renderedDescrip = $this->descripTemplate->getTemplateString();

        return "
        <div class='album py-5 bg-light'>
        <div class='container'>
          <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3'>
            <div class='col'>
              <div class='card shadow-sm'>
              <svg class='bd-placeholder-img card-img-top' 
              width='100%' height='225' xmlns='http://www.w3.org/2000/svg' 
              role='img' aria-label='Placeholder: КАРТОЧКА' 
              preserveAspectRatio='xMidYMid slice' focusable='false'>
              <title>Placeholder</title><rect width='100%' height='100%' fill='#55595c'/>
              <text x='50%' y='50%' fill='#eceeef' dy='.3em'><?= \$product; ?></text></svg>
                <div class='card-body'>
                <h4 class='card-text'><b><?= \$product; ?></b></h4>
                    $renderedDescrip
                  <div class='d-flex justify-content-between align-items-center'>
                    <div class='btn-group'>
                      <button type='button' class='btn btn-sm btn-outline-secondary'>ПЕРЕЙТИ</button>
                      <button type='button' class='btn btn-sm btn-outline-secondary'>В КОШИК</button>
                    </div>
                    $renderedPrice
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>";
    }
}

class ListTemplateProductTemplate extends BaseProductTemplate
{
    public function getTemplateString(): string
    {
        $renderedPrice = $this->priceTemplate->getTemplateString();
        $renderedDescrip = $this->descripTemplate->getTemplateString();

        return "
        <hr class='featurette-divider'>
        <div class='row featurette'>
        <div class='col-md-2'>
        <img src='img/pec_icon.jpg'  class='bd-placeholder-img rounded-circle' width='150' height='150'>
        </div>
        <div class='col-md-7'>
        <h2><b><?= \$product; ?></b></h2>
        $renderedDescrip
        $renderedPrice
        <a class='btn btn-secondary' href='#' role='button'>Детальніше&raquo;</a>
        </p>
        </p>
        </div>
        </div>";
    }
}

interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}

class AlbumTemplateRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        extract($arguments);

        ob_start();
        eval(' ?>' . $templateString . '<?php ');
        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }
}

class ListTemplateRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        extract($arguments);

        ob_start();
        eval(' ?>' . $templateString . '<?php ');
        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }
}

class Product
{

    public $product;

    public $price;

    public $text;

    public function __construct($product, $price, $text)
    {
        $this->product = $product;
        $this->price = $price;
        $this->text = $text;
    }

    public function render(TemplateFactory $factory): string
    {
        $productTemplate = $factory->createProductTemplate();

        $renderer = $factory->getRenderer();

        return $renderer->render($productTemplate->getTemplateString(), [
            'product' => $this->product,
            'price' => $this->price,
            'text' => $this->text
        ]);
    }
}

$db=new mysqli("127.0.0.1","root","","Pecarnia");
$db->query("SET NAMES 'UTF8'");
$temp=$db->query("SELECT * FROM products");
?>