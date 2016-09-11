<?php

/* weatherIndex.html */
class __TwigTemplate_ef0e622b3f75250b54e16f255af96b8c75041307d6167ce83bef9753dea7401e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "weatherIndex.html", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
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
        return array (  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends 'layout.html' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* <weather-app></weather-app>*/
/* */
/* {% endblock %}*/
