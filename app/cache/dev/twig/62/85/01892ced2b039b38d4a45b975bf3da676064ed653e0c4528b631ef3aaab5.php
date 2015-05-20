<?php

/* MyAppTodoBundle:Tache:listerall.html.twig */
class __TwigTemplate_628501892ced2b039b38d4a45b975bf3da676064ed653e0c4528b631ef3aaab5 extends Twig_Template
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
        echo "<h1>TODO.COM</h1>
<h1>Liste des Taches</h1>

<table>

\t<tr>
\t\t<td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "titre", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
\t\t<td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "description", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "dateTache", array()), "d/m/Y"), "html", null, true);
        echo "</td>
\t</tr>

</table>

<p><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("myapp_tache_lister");
        echo "\">Retour</a><p>
    
    <p>Copyright all right reserved /created by MSIM</p>";
    }

    public function getTemplateName()
    {
        return "MyAppTodoBundle:Tache:listerall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  39 => 13,  33 => 10,  27 => 7,  19 => 1,);
    }
}
