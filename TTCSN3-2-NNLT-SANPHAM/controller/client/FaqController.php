<?php
include_once "model/CategoryModel.php";

class FaqController extends BaseController
{
    public $modelCategory;
    public function __construct()
    {
        $this->modelCategory = new CategoryModel();
        $this->loadView("client/faq/index", array());
        $this->setTemplate("base/client/index", array('categories' => $this->modelCategory->getListAll()));
    }
}
