<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_34d0e521fec491ed7047d92045a6e7172d9ce9451fa503065744bb9bd1797e81 extends Twig_Template
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
        $__internal_7266d0677ddc5726e15ed81f277800ce7d63bbaaad219fe62326957d96bf10cd = $this->env->getExtension("native_profiler");
        $__internal_7266d0677ddc5726e15ed81f277800ce7d63bbaaad219fe62326957d96bf10cd->enter($__internal_7266d0677ddc5726e15ed81f277800ce7d63bbaaad219fe62326957d96bf10cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7266d0677ddc5726e15ed81f277800ce7d63bbaaad219fe62326957d96bf10cd->leave($__internal_7266d0677ddc5726e15ed81f277800ce7d63bbaaad219fe62326957d96bf10cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67d1e7d09e840b39763c8c732cd3770b87b187361af8325f91bb7b315445d260 = $this->env->getExtension("native_profiler");
        $__internal_67d1e7d09e840b39763c8c732cd3770b87b187361af8325f91bb7b315445d260->enter($__internal_67d1e7d09e840b39763c8c732cd3770b87b187361af8325f91bb7b315445d260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_67d1e7d09e840b39763c8c732cd3770b87b187361af8325f91bb7b315445d260->leave($__internal_67d1e7d09e840b39763c8c732cd3770b87b187361af8325f91bb7b315445d260_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cff70d6f8f55297363f28846ca6ce8c23177b8c193660704fcd35809d7129156 = $this->env->getExtension("native_profiler");
        $__internal_cff70d6f8f55297363f28846ca6ce8c23177b8c193660704fcd35809d7129156->enter($__internal_cff70d6f8f55297363f28846ca6ce8c23177b8c193660704fcd35809d7129156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cff70d6f8f55297363f28846ca6ce8c23177b8c193660704fcd35809d7129156->leave($__internal_cff70d6f8f55297363f28846ca6ce8c23177b8c193660704fcd35809d7129156_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cda53cb28a31cd314b2b5ea1b833ae23c679e223bae5ff9234b568e18b7d2e53 = $this->env->getExtension("native_profiler");
        $__internal_cda53cb28a31cd314b2b5ea1b833ae23c679e223bae5ff9234b568e18b7d2e53->enter($__internal_cda53cb28a31cd314b2b5ea1b833ae23c679e223bae5ff9234b568e18b7d2e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cda53cb28a31cd314b2b5ea1b833ae23c679e223bae5ff9234b568e18b7d2e53->leave($__internal_cda53cb28a31cd314b2b5ea1b833ae23c679e223bae5ff9234b568e18b7d2e53_prof);

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
