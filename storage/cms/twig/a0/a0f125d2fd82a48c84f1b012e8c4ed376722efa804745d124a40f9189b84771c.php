<?php

/* /var/www/SwiftCodeId/themes/haha/partials/pages-all/navigation.htm */
class __TwigTemplate_450edd9606e02f3027ec150fa1181af870962f28c4c27b42be2840673ad4d59f extends Twig_Template
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
        echo "<div class=\"lt-navbar navbar-fixed\">
  <nav class=\"lt-no-background\">
    <div class=\"nav-wrapper\">
      <div class=\"lt-container container\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" class=\"brand-logo white-text\">SwiftCodeID</a>
        <a href=\"#\" data-activates=\"mobile-menu\" class=\"lt-mobile-toggle button-collapse\"><i class=\"material-icons\">menu</i></a>
        <ul class=\"right hide-on-med-and-down\">
          <li class=\"";
        // line 8
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a></li>
          <li class=\"";
        // line 9
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\">About</a></li>
          <li class=\"";
        // line 10
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "article")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("article");
        echo "\">Article</a></li>
          
        </ul>
        <ul class=\"side-nav\" id=\"mobile-menu\">
          <li class=\"";
        // line 14
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a></li>
          <li class=\"";
        // line 15
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\">About</a></li>
          <li class=\"";
        // line 16
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "article")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("article");
        echo "\">Article</a></li>
          
        </ul>
      </div>
    </div>
  </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/SwiftCodeId/themes/haha/partials/pages-all/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  66 => 15,  58 => 14,  47 => 10,  39 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"lt-navbar navbar-fixed\">
  <nav class=\"lt-no-background\">
    <div class=\"nav-wrapper\">
      <div class=\"lt-container container\">
        <a href=\"{{ 'home'|page }}\" class=\"brand-logo white-text\">SwiftCodeID</a>
        <a href=\"#\" data-activates=\"mobile-menu\" class=\"lt-mobile-toggle button-collapse\"><i class=\"material-icons\">menu</i></a>
        <ul class=\"right hide-on-med-and-down\">
          <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
          <li class=\"{% if this.page.id == 'about' %}active{% endif %}\"><a href=\"{{ 'about'|page }}\">About</a></li>
          <li class=\"{% if this.page.id == 'article' %}active{% endif %}\"><a href=\"{{ 'article'|page }}\">Article</a></li>
          
        </ul>
        <ul class=\"side-nav\" id=\"mobile-menu\">
          <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
          <li class=\"{% if this.page.id == 'about' %}active{% endif %}\"><a href=\"{{ 'about'|page }}\">About</a></li>
          <li class=\"{% if this.page.id == 'article' %}active{% endif %}\"><a href=\"{{ 'article'|page }}\">Article</a></li>
          
        </ul>
      </div>
    </div>
  </nav>
</div>", "/var/www/SwiftCodeId/themes/haha/partials/pages-all/navigation.htm", "");
    }
}
