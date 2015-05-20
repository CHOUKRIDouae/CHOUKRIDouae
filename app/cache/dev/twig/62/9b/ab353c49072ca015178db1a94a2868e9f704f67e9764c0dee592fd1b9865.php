<?php

/* MyAppTodoBundle:Tache:lister.html.twig */
class __TwigTemplate_629bab353c49072ca015178db1a94a2868e9f704f67e9764c0dee592fd1b9865 extends Twig_Template
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
<h1>A faire :</h1>

<p><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("myapp_tache_ajouter");
        echo "\">Ajouter une Tache</a><p>

<table>
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 8
            echo "\t<tr>
\t\t<td><li type=disc><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_tache_listerall", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "titre", array()), "html", null, true);
            echo "<a/></li></td>
\t</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 12
            echo "\t<tr><td>Aucun tache n'a été trouvé.</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</table>


    
  <p>Copyright all right reserved /created by MSIM</p>    ";
    }

    public function getTemplateName()
    {
        return "MyAppTodoBundle:Tache:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  48 => 12,  38 => 9,  35 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
