<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b2bc69855ebaa30bf72c5552ebcd258fd67a1595b9e200e203e4379eacaded6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2938e5d96c3a5d42c73434bfe19363847139febcd8b3e9f08b2d1fb74db38a0 = $this->env->getExtension("native_profiler");
        $__internal_b2938e5d96c3a5d42c73434bfe19363847139febcd8b3e9f08b2d1fb74db38a0->enter($__internal_b2938e5d96c3a5d42c73434bfe19363847139febcd8b3e9f08b2d1fb74db38a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2938e5d96c3a5d42c73434bfe19363847139febcd8b3e9f08b2d1fb74db38a0->leave($__internal_b2938e5d96c3a5d42c73434bfe19363847139febcd8b3e9f08b2d1fb74db38a0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f18fe0d6fe20d9935800e10520d3bcf0715463068aacc78e656be50134728e0 = $this->env->getExtension("native_profiler");
        $__internal_3f18fe0d6fe20d9935800e10520d3bcf0715463068aacc78e656be50134728e0->enter($__internal_3f18fe0d6fe20d9935800e10520d3bcf0715463068aacc78e656be50134728e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3f18fe0d6fe20d9935800e10520d3bcf0715463068aacc78e656be50134728e0->leave($__internal_3f18fe0d6fe20d9935800e10520d3bcf0715463068aacc78e656be50134728e0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_51a2d6aabd7f2d34d3a7ecedbc526435cb8c8db4cb7a0205a7dad740e69b1885 = $this->env->getExtension("native_profiler");
        $__internal_51a2d6aabd7f2d34d3a7ecedbc526435cb8c8db4cb7a0205a7dad740e69b1885->enter($__internal_51a2d6aabd7f2d34d3a7ecedbc526435cb8c8db4cb7a0205a7dad740e69b1885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_51a2d6aabd7f2d34d3a7ecedbc526435cb8c8db4cb7a0205a7dad740e69b1885->leave($__internal_51a2d6aabd7f2d34d3a7ecedbc526435cb8c8db4cb7a0205a7dad740e69b1885_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_846816330b7c686fff0b8ae8c49d7745896c589f7eab4bb3bc8ab5c22fdcea55 = $this->env->getExtension("native_profiler");
        $__internal_846816330b7c686fff0b8ae8c49d7745896c589f7eab4bb3bc8ab5c22fdcea55->enter($__internal_846816330b7c686fff0b8ae8c49d7745896c589f7eab4bb3bc8ab5c22fdcea55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_846816330b7c686fff0b8ae8c49d7745896c589f7eab4bb3bc8ab5c22fdcea55->leave($__internal_846816330b7c686fff0b8ae8c49d7745896c589f7eab4bb3bc8ab5c22fdcea55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
