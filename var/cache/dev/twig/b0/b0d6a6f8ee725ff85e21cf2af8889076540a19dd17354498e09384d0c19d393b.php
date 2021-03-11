<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* navbar.html.twig */
class __TwigTemplate_e8ba89be4f7aec8f879b1c3c5225ca755719fe0ff4b994ff0be62080adef7402 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav id=\"nav\" class=\"nav navbar\">
\t<a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"></a>
\t<ul id=\"navbarMenu\" class=\"navbarMenu\">


\t
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipes");
        echo "\">Recipes</a>
\t\t\t</li>
\t\t\t<li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signin");
        echo "\">Sign in</a></li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Login</a>
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_recipes");
        echo "\">Recipes(admin)</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comments");
        echo "\">Comments(admin)</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_user");
        echo "\">Profil</a>
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">Logout</a>
\t\t\t</li>

\t\t<li class=\"toggle\">
\t\t\t<a href=\"javascript:void(0);\" onclick=\"responsiveNavbar()\">
\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t</a>
\t\t</li>
\t</ul>
</nav>
<div class=\"navLines\"></div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  86 => 22,  80 => 19,  74 => 16,  67 => 12,  62 => 10,  57 => 8,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"nav\" class=\"nav navbar\">
\t<a href=\"{{ path('home') }}\"><img src=\"{{ asset('img/logo.png')}}\"></a>
\t<ul id=\"navbarMenu\" class=\"navbarMenu\">


\t
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('recipes') }}\">Recipes</a>
\t\t\t</li>
\t\t\t<li><a href=\"{{ path('signin') }}\">Sign in</a></li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('login') }}\">Login</a>
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<a href=\"{{ path('admin_recipes') }}\">Recipes(admin)</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('admin_comments') }}\">Comments(admin)</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('edit_user') }}\">Profil</a>
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<a href=\"{{ path('logout') }}\">Logout</a>
\t\t\t</li>

\t\t<li class=\"toggle\">
\t\t\t<a href=\"javascript:void(0);\" onclick=\"responsiveNavbar()\">
\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t</a>
\t\t</li>
\t</ul>
</nav>
<div class=\"navLines\"></div>
", "navbar.html.twig", "C:\\Users\\a2124872\\Desktop\\EPCF2 backup\\templates\\navbar.html.twig");
    }
}
