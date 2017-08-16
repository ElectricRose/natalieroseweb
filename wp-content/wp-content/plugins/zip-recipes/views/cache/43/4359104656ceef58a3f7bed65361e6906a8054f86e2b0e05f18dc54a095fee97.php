<?php

/* author_promo.twig */
class __TwigTemplate_4f3a31a58574b2decca2eab54e93e2e9d7da9e9adb41c69a4b000fe4e508ccbd extends Twig_Template
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
        echo "<p id='recipe-author'>
    <label for=\"author\">";
        // line 2
        echo __("Author:", 'zip-recipes');
        echo "</label>
  <span style=\"display:block; padding: 5px; border: 1px solid #ccc; border-radius: 5px; box-shadow: 1px 1px 1px 1px #ccc;\">
    <img style=\"vertical-align: middle;\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["warning_icon_url"]) ? $context["warning_icon_url"] : null), "html", null, true);
        echo "\" />
    <span style=\"color: rgb(239, 108, 0); font-size: 13px; line-height: 25px\">Google recommends you set an author. This feature is available in the premium version. <a style=\"color: rgb(239, 108, 0);\" href=\"https://www.ziprecipes.net/promo/author_missing\" target=\"_blank\">Click here to learn more.</a></span>
  </span>
</p>
";
    }

    public function getTemplateName()
    {
        return "author_promo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "author_promo.twig", "/nas/content/live/natalierose/wp-content/plugins/zip-recipes/views/author_promo.twig");
    }
}
