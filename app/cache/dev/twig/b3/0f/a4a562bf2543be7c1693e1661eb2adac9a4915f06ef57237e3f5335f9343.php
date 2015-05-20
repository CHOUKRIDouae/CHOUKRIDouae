<?php

/* MyAppTodoBundle:Default:index.html.twig */
class __TwigTemplate_b30fa4a562bf2543be7c1693e1661eb2adac9a4915f06ef57237e3f5335f9343 extends Twig_Template
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
        echo "
<html>
\t<body>
\t\t<h1>Liste des Taches</h1>
\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tac"]) {
            // line 6
            echo "\t\t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tac"], "titre", array()), "html", null, true);
            echo "</p>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 8
            echo "\t\t\t<p>Aucune tache n'a été trouvée.</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MyAppTodoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  38 => 8,  30 => 6,  25 => 5,  19 => 1,);
    }
}
