<?php

/* /home/ayatmaulana/PROJECT/indosystem/swiftlangid.dev/themes/haha/pages/article.htm */
class __TwigTemplate_3623019cd47e6bb34fd0641b19ba7b66ad02013e222970cbd5155ce268cd24e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"lt-header\" class=\"lt-section lt-section-fullwidth section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-header-content\">
      ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-portfolio/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </div>
  </div>
</section>

<section id=\"lt-mainpage\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-mainpage-content\">
      ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-portfolio/mainpage"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/ayatmaulana/PROJECT/indosystem/swiftlangid.dev/themes/haha/pages/article.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 13,  37 => 12,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"lt-header\" class=\"lt-section lt-section-fullwidth section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-header-content\">
      {% partial \"pages-portfolio/header\" %}
    </div>
  </div>
</section>

<section id=\"lt-mainpage\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-mainpage-content\">
      {% partial \"pages-portfolio/mainpage\" %}
    </div>
  </div>
</section>", "/home/ayatmaulana/PROJECT/indosystem/swiftlangid.dev/themes/haha/pages/article.htm", "");
    }
}
