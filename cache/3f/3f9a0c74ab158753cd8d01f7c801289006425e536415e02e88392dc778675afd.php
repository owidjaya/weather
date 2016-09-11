<?php

/* weatherIndex.html */
class __TwigTemplate_211d103b4d5d0ea3423c6ef71e9ddc2020a43f152b784bbd1388c6b79d7708d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "html", array()), "weatherIndex.html", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<weather-app></weather-app>

";
    }

    public function getTemplateName()
    {
        return "weatherIndex.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  27 => 5,  18 => 1,);
    }
}
/* {% extends layout.html %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* <weather-app></weather-app>*/
/* */
/* {% endblock %}*/
