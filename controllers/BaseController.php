<?php

abstract class BaseController
{
    protected $controllerName;
    protected $actionName;
    protected $isViewRendered = false;
    protected $isPost = false;
    protected $isLoggedIn = false;
    protected $title = "";
    protected $model;
    protected $validationErrors = [];

    function __construct(string $controllerName, string $actionName)
    {
        $this->controllerName = $controllerName;
        $this->actionName = $actionName;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->isPost = true;
        }

        $this->isLoggedIn = isset($_SESSION['username']);

        // Load the default model class for the current controller
        $modelClassName = ucfirst(strtolower($controllerName)) . 'Model';
        if (class_exists($modelClassName)) {
            $this->model = new $modelClassName();
        }

        $this->onInit();
    }

    public function onInit()
    {
        // Implement initializing logic in the subclasses
    }

    public function index()
    {
        // Implement the default action in the subclasses
    }

    function addMessage(string $msg, string $type)
    {
        if (!isset($_SESSION['messages'])) {
            $_SESSION['messages'] = array();
        };
        array_push($_SESSION['messages'],
            array('text' => $msg, 'type' => $type));
    }

    function addErrorMessage(string $errorMsg)
    {
        $this->addMessage($errorMsg, 'error');
    }

    function setValidationError(string $fieldName, string $errorMsg)
    {
        $this->validationErrors[$fieldName] = $errorMsg;
    }

    public function renderView(string $viewName = null, bool $includeLayout = true)
    {
        if (!$this->isViewRendered) {
            ob_start();
            if ($viewName == null) {
                $viewName = $this->actionName;
            }
            $viewFileName = 'views/' . $this->controllerName . '/' . $viewName . '.php';

            include($viewFileName);
            $htmlFromView = ob_get_contents();

            ob_end_clean();
            if ($includeLayout) {
                include('views/_layout/header.php');
            }
            echo $htmlFromView;
            if ($includeLayout) {
                include('views/_layout/footer.php');
            }
            $this->isViewRendered = true;
        }
    }
}