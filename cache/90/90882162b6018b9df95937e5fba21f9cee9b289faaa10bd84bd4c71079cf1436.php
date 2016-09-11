<?php

/* layout.html */
class __TwigTemplate_a72420e920faef6709c9e8928ea0c9420ee76eacccc5f1e85e2abea828fee48b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
   <head>
       
   </head> 
    
   <body>
   Testing    
    ";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "   </body>
</html>";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  36 => 8,  31 => 10,  29 => 8,  20 => 1,);
    }
}
/* <html>*/
/*    <head>*/
/*        */
/*    </head> */
/*     */
/*    <body>*/
/*    Testing    */
/*     {% block body %}*/
/*     {% endblock %}*/
/*    </body>*/
/* </html>*/
