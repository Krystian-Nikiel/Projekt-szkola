<?php

/* @galleries/shortcode/helpers.twig */
class __TwigTemplate_135e6f8ffbbdc7e8f1f859d92c48978d347a0df01b3ddf40aa4976ac120b91d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'figure_before' => array($this, 'block_figure_before'),
            'a_attributes' => array($this, 'block_a_attributes'),
            'figure_attributes' => array($this, 'block_figure_attributes'),
            'image_attributes' => array($this, 'block_image_attributes'),
            'figcaption_style' => array($this, 'block_figcaption_style'),
            'figcaption_attributes' => array($this, 'block_figcaption_attributes'),
            'figcaption_wrap' => array($this, 'block_figcaption_wrap'),
            'figcaption_after' => array($this, 'block_figcaption_after'),
            'figure_after' => array($this, 'block_figure_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "type") != "none")) {
            // line 3
            echo "\t\tborder: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "width"), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "type"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "color"), "html", null, true);
            echo ";
\t";
        }
        // line 5
        echo "\tborder-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius") . strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t";
        // line 6
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow") == 1)) {
            // line 7
            echo "\t\tbox-shadow: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "x"), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "y"), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "blur"), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "color"), "html", null, true);
            echo ";
\t";
        }
        // line 8
        echo ";
\tmargin: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "distance"), "html", null, true);
        echo "px;";
        // line 11
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "2")) {
            // line 12
            echo "\t\theight:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height") . strtr($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t";
        }
        // line 14
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "2")) {
            // line 15
            echo "\t\twidth:auto;
\t";
        } else {
            // line 17
            echo "\t\twidth:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width") . strtr($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t";
        }
        $context["figureStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
";
        // line 21
        ob_start();
        // line 22
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "description", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "description"))))) {
            // line 23
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "description"), "html", null, true);
            echo "
\t";
        } else {
            // line 25
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "title"), "html", null, true);
            echo "
\t";
        }
        $context["aTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
";
        // line 29
        ob_start();
        // line 30
        echo "\t";
        if (((((!$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true)) || twig_test_empty(trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link")))) && ((!$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true)) || twig_test_empty(trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))))) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "0"))) {
            // line 31
            echo "\t\tgg-colorbox
\t";
        }
        // line 33
        echo "
\t";
        // line 34
        if ((($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) && (!twig_test_empty(trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))))) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "0"))) {
            // line 35
            echo "\t\tgg-video
\t";
        }
        // line 37
        echo "
\t";
        // line 38
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "2") && (((!$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true)) || twig_test_empty(trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link")))) || ($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) && (!twig_test_empty(trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video")))))))) {
            // line 39
            echo "\t\tpbox
\t";
        }
        $context["aClass"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 42
        echo "
";
        // line 43
        ob_start();
        // line 44
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link"))))) {
            // line 45
            echo "\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('force_http')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link"))), "html", null, true);
            echo "
\t\t";
            // line 46
            $context["link"] = true;
            // line 47
            echo "\t";
        } else {
            // line 48
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "sizes"), "full"), "url"), "html", null, true);
            echo "
\t";
        }
        $context["aHref"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 51
        echo "
";
        // line 52
        ob_start();
        // line 53
        echo "\t";
        if (((isset($context["link"]) ? $context["link"] : null) && $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "rel", array(), "any", true, true))) {
            // line 54
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "rel"), "html", null, true);
            echo "
\t";
        }
        // line 56
        echo "\t";
        if ((((isset($context["link"]) ? $context["link"] : null) == false) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "enabled") == "false"))) {
            // line 57
            echo "\t\tnofollow
\t";
        }
        $context["aRel"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        echo "
";
        // line 61
        ob_start();
        // line 62
        echo "\t";
        $this->displayBlock('figure_before', $context, $blocks);
        // line 83
        echo "
\t";
        // line 84
        ob_start();
        // line 85
        echo "\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "false")) {
            // line 86
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
                // line 87
                echo "\t\t\t\ticons
\t\t\t";
            } else {
                // line 89
                echo "\t\t\t\tnone
\t\t\t";
            }
            // line 91
            echo "\t\t";
        } else {
            // line 92
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
                // line 93
                echo "\t\t\t\t";
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "personal") == "true") && twig_in_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "captionEffect"), array(0 => "icons", 1 => "icons-scale", 2 => "icons-sodium-left", 3 => "icons-sodium-top", 4 => "icons-nitrogen-top")))) {
                    // line 94
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "captionEffect"), "html", null, true);
                    echo "
\t\t\t\t";
                } else {
                    // line 96
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"), "html", null, true);
                    echo "
\t\t\t\t";
                }
                // line 98
                echo "\t\t\t";
            } else {
                // line 99
                echo "\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "personal") == "true")) {
                    // line 100
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "captionEffect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "captionEffect"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"))), "html", null, true);
                    echo "
\t\t\t\t";
                } else {
                    // line 102
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"), "html", null, true);
                    echo "
\t\t\t\t";
                }
                // line 104
                echo "\t\t\t";
            }
            // line 105
            echo "\t\t";
        }
        // line 106
        echo "\t";
        $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 107
        echo "
\t\t<figure
\t\t\t";
        // line 109
        $this->displayBlock('figure_attributes', $context, $blocks);
        // line 128
        echo ">

\t\t\t<div class=\"crop
\t\t\t\t";
        // line 131
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "overlay") == "1") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow") == "1"))) {
            // line 132
            echo "\t\t\t\t\timage-overlay
\t\t\t\t";
        }
        // line 133
        echo "\"
\t\t\t\tstyle=\"
\t\t\t\t";
        // line 135
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "0") || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "3"))) {
            // line 136
            echo "\t\t\t\t\twidth:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width") . strtr($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\theight:";
            // line 137
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height") . strtr($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\toverflow:hidden;
\t\t\t\t";
        }
        // line 139
        echo "\">

\t\t\t\t";
        // line 141
        list($context["width"], $context["height"], $context["crop"]) =         array(0, 0, 0);
        // line 142
        echo "
\t\t\t\t";
        // line 143
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit") == 0)) {
            // line 144
            echo "\t\t\t\t\t";
            $context["width"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width");
            // line 145
            echo "\t\t\t\t";
        } else {
            // line 146
            echo "\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "width") < 500)) {
                // line 147
                echo "\t\t\t\t\t\t";
                $context["width"] = null;
                // line 148
                echo "\t\t\t\t\t";
            } else {
                // line 149
                echo "\t\t\t\t\t\t";
                $context["width"] = round((($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "width") / 100) * $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width")));
                // line 150
                echo "\t\t\t\t\t";
            }
            echo "\t
\t\t\t\t";
        }
        // line 152
        echo "
\t\t\t\t";
        // line 153
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height_unit") == 0)) {
            // line 154
            echo "\t\t\t\t\t";
            $context["height"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height");
            // line 155
            echo "\t\t\t\t";
        } else {
            // line 156
            echo "\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "height") < 500)) {
                // line 157
                echo "\t\t\t\t\t\t";
                $context["height"] = null;
                // line 158
                echo "\t\t\t\t\t";
            } else {
                // line 159
                echo "\t\t\t\t\t\t";
                $context["height"] = round((($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "height") / 100) * $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height")));
                // line 160
                echo "\t\t\t\t\t";
            }
            echo "\t
\t\t\t\t";
        }
        // line 162
        echo "
\t\t\t\t";
        // line 163
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == 0) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == 3))) {
            // line 164
            echo "\t\t\t\t\t";
            $context["crop"] = 1;
            // line 165
            echo "\t\t\t\t";
        }
        // line 166
        echo "
\t\t\t\t";
        // line 167
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == 1)) {
            // line 168
            echo "\t\t\t\t\t";
            $context["height"] = null;
            // line 169
            echo "\t\t\t\t";
        }
        // line 170
        echo "
\t\t\t\t";
        // line 171
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == 2)) {
            // line 172
            echo "\t\t\t\t\t";
            $context["width"] = null;
            // line 173
            echo "\t\t\t\t";
        }
        // line 174
        echo "
\t\t\t\t<img 
\t\t\t\t\t";
        // line 176
        $this->displayBlock('image_attributes', $context, $blocks);
        // line 190
        echo "\t\t\t\t/>
\t\t\t</div>

\t\t\t";
        // line 193
        ob_start();
        // line 194
        echo "\t\t\t\t";
        $this->displayBlock('figcaption_style', $context, $blocks);
        // line 217
        echo "\t\t\t";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 218
        echo "
\t\t\t<figcaption
\t\t\t\t";
        // line 220
        $this->displayBlock('figcaption_attributes', $context, $blocks);
        // line 226
        echo ">

\t\t\t\t<div
\t\t\t\t\tclass=\"grid-gallery-figcaption-wrap\"
\t\t\t\t\tstyle=\"
\t\t\t\t\t";
        // line 231
        if (((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true)) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "false"))) {
            // line 232
            echo "\t\t\t\t\t\tvertical-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), "html", null, true);
            echo ";
\t\t\t\t\t";
        }
        // line 233
        echo "\">

\t\t\t\t\t";
        // line 235
        $this->displayBlock('figcaption_wrap', $context, $blocks);
        // line 302
        echo "\t\t\t\t</div>
\t\t\t</figcaption>

\t\t\t";
        // line 305
        $this->displayBlock('figcaption_after', $context, $blocks);
        // line 345
        echo "\t\t</figure>

\t";
        // line 347
        $this->displayBlock('figure_after', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_figure_before($context, array $blocks = array())
    {
        // line 63
        echo "\t\t";
        if (((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true)) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "false"))) {
            // line 64
            echo "\t\t\t<a
\t\t\t\t";
            // line 65
            $this->displayBlock('a_attributes', $context, $blocks);
            // line 80
            echo "\t\t\t>
\t\t";
        }
        // line 82
        echo "\t";
    }

    // line 65
    public function block_a_attributes($context, array $blocks = array())
    {
        // line 66
        echo "\t\t\t\t\tclass=\"gg-link ";
        echo twig_escape_filter($this->env, trim((isset($context["aClass"]) ? $context["aClass"] : null)), "html", null, true);
        echo "\"
\t\t\t\t\thref=\"";
        // line 67
        echo twig_escape_filter($this->env, trim((isset($context["aHref"]) ? $context["aHref"] : null)), "html", null, true);
        echo "\"
\t\t\t\t\ttarget=\"";
        // line 68
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target"), "_self")) : ("_self")), "html", null, true);
        echo "\"
\t\t\t\t\ttitle=\"";
        // line 69
        echo twig_escape_filter($this->env, trim((isset($context["aTitle"]) ? $context["aTitle"] : null)), "html", null, true);
        echo "\"
\t\t\t\t\t";
        // line 70
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "1") && ((isset($context["link"]) ? $context["link"] : null) == false))) {
            // line 71
            echo "\t\t\t\t\t\trel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t";
        } else {
            // line 73
            echo "\t\t\t\t\t\trel=\"";
            echo twig_escape_filter($this->env, (isset($context["aRel"]) ? $context["aRel"] : null), "html", null, true);
            echo "\"
\t\t\t\t\t";
        }
        // line 75
        echo "\t\t\t\t\t";
        if (((isset($context["link"]) ? $context["link"] : null) == true)) {
            // line 76
            echo "\t\t\t\t\t\tdata-type=\"link\"
\t\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t\tstyle=\"border-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius") . strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";\"
\t\t\t\t";
    }

    // line 109
    public function block_figure_attributes($context, array $blocks = array())
    {
        // line 110
        echo "\t\t\t\tclass=\"grid-gallery-caption
\t\t\t\t";
        // line 111
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow") == "1") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow") == "1"))) {
            // line 112
            echo "\t\t\t\t\tshadow-show
\t\t\t\t";
        }
        // line 114
        echo "\t\t\t\t";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow") == "2") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow") == "1"))) {
            // line 115
            echo "\t\t\t\t shadow-hide
\t\t\t\t";
        }
        // line 116
        echo "\"
\t\t\t\tdata-grid-gallery-type=\"";
        // line 117
        echo twig_escape_filter($this->env, trim((isset($context["galleryType"]) ? $context["galleryType"] : null)), "html", null, true);
        echo "\"
\t\t\t\tstyle=\"display:none;";
        // line 118
        echo twig_escape_filter($this->env, trim((isset($context["figureStyle"]) ? $context["figureStyle"] : null)), "html", null, true);
        echo "\"
\t\t\t\t";
        // line 119
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true")) {
            // line 120
            echo "\t\t\t\t\t";
            ob_start();
            // line 121
            echo "\t\t\t\t\t\t";
            if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"))) {
                // line 122
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 124
                echo "\t\t\t\t\t\t\ticons
\t\t\t\t\t\t";
            }
            // line 126
            echo "\t\t\t\t\t";
            $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 127
            echo "\t\t\t\t";
        }
        // line 128
        echo "\t\t\t";
    }

    // line 176
    public function block_image_attributes($context, array $blocks = array())
    {
        // line 177
        echo "\t\t\t\t\tsrc=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "id"), (isset($context["width"]) ? $context["width"] : null), (isset($context["height"]) ? $context["height"] : null), $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "cropPosition"))), "html", null, true);
        echo "\"
\t\t\t\t\talt=\"";
        // line 178
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "alt")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "alt"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "title"), "html", null, true);
        }
        echo "\"
\t\t\t\t\ttitle=\"";
        // line 179
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "description")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "description"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "title"), "html", null, true);
        }
        echo "\"
\t\t\t\t\tdata-caption=\"";
        // line 180
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "title"), "html", null, true);
        }
        echo "\"
\t\t\t\t\tstyle=\"
\t\t\t\t\t";
        // line 182
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit") == 0) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width"))))) {
            // line 183
            echo "\t\t\t\t\twidth:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width"), "html", null, true);
            echo "px;
\t\t\t\t\t";
        }
        // line 185
        echo "\t\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height_unit") == 0) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height"))))) {
            // line 186
            echo "\t\t\t\t\theight:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height"), "html", null, true);
            echo "px;
\t\t\t\t\t";
        }
        // line 188
        echo "\t\t\t\t\t\"
\t\t\t\t\t";
    }

    // line 194
    public function block_figcaption_style($context, array $blocks = array())
    {
        // line 195
        echo "\t\t\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
            // line 196
            echo "\t\t\t\t\t\tfont-family:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "font_family"), "html", null, true);
            echo ";
\t\t\t\t\t\t";
            // line 197
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_enabled") == "true")) {
                // line 198
                echo "\t\t\t\t\t\t\tbackground-color:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color"), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
\t\t\t\t\t\t\theight : 100%;
\t\t\t\t\t\t\t";
                // line 201
                echo "\t\t\t\t\t\t";
            } else {
                // line 202
                echo "\t\t\t\t\t\t\theight : 100%;
\t\t\t\t\t\t\tbackground-color: transparent;
\t\t\t\t\t\t";
            }
            // line 205
            echo "\t\t\t\t\t";
        } else {
            // line 206
            echo "\t\t\t\t\t\tcolor:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "foreground"), "html", null, true);
            echo ";
\t\t\t\t\t\tbackground-color:";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "background"), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-size:";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
            echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\t\t\ttext-align:";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_align"), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-family:";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "font_family"), "html", null, true);
            echo ";
\t\t\t\t\t\t";
            // line 211
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect") == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "false"))) {
                // line 212
                echo "\t\t\t\t\t\t\topacity:1;
\t\t\t\t\t\t\tbottom:0;
\t\t\t\t\t\t";
            }
            // line 215
            echo "\t\t\t\t\t";
        }
        // line 216
        echo "\t\t\t\t";
    }

    // line 220
    public function block_figcaption_attributes($context, array $blocks = array())
    {
        // line 221
        echo "\t\t\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
            // line 222
            echo "\t\t\t\t\t\tdata-alpha=\"";
            echo twig_escape_filter($this->env, trim((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_transparency"), 5)) : (5))), "html", null, true);
            echo "\"
\t\t\t\t\t";
        }
        // line 224
        echo "\t\t\t\t\tdata-alpha=\"";
        echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "transparency")), "html", null, true);
        echo "\"
\t\t\t\t\tstyle=\"";
        // line 225
        echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
        echo "\"
\t\t\t\t";
    }

    // line 235
    public function block_figcaption_wrap($context, array $blocks = array())
    {
        // line 236
        echo "\t\t\t\t\t\t";
        // line 237
        echo "\t\t\t\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
            // line 238
            echo "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"hi-icon-wrap ";
            // line 239
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "effect"), 0, ((isset($context["length"]) ? $context["length"] : null) - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "effect"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\tdata-margin=\"";
            // line 240
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin"), 5)) : (5)), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t";
            // line 242
            if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))))) {
                // line 243
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 244
                ob_start();
                // line 245
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_in_filter("youtu", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))) {
                    // line 246
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"), (isset($context["youtube"]) ? $context["youtube"] : null)), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 247
                    $context["videoSource"] = "youtube";
                    // line 248
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter("vimeo.com", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))) {
                    // line 249
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFilter('preg_replace')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"), (isset($context["vimeoPattern"]) ? $context["vimeoPattern"] : null), (isset($context["vimeoReplace"]) ? $context["vimeoReplace"] : null))) . "?api=1"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 250
                    $context["videoSource"] = "vimeo";
                    // line 251
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 252
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video")), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 254
                echo "\t\t\t\t\t\t\t\t\t";
                $context["videoUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 255
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 256
                $context["videoIcon"] = ((twig_in_filter("youtu", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))) ? ("icon-youtube") : ("icon-vimeo"));
                // line 257
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 258
                ob_start();
                // line 259
                echo "\t\t\t\t\t\t\t\t\t\tmargin-left:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin"), 5)) : (5)), "html", null, true);
                echo ";
\t\t\t\t\t\t\t\t\t\tmargin-right:";
                // line 260
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin"), 5)) : (5)), "html", null, true);
                echo ";
\t\t\t\t\t\t\t\t\t";
                $context["iconStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 262
                echo "
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 263
                echo twig_escape_filter($this->env, trim((isset($context["videoUrl"]) ? $context["videoUrl"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"hi-icon gg-video ";
                // line 264
                echo twig_escape_filter($this->env, (isset($context["videoIcon"]) ? $context["videoIcon"] : null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 265
                if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "2")) {
                    echo " pbox";
                }
                // line 266
                echo "\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\tstyle=\"";
                // line 267
                echo twig_escape_filter($this->env, trim((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\tdata-video-source=\"";
                // line 268
                echo twig_escape_filter($this->env, (isset($context["videoSource"]) ? $context["videoSource"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t";
                // line 269
                if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "1") && ((isset($context["link"]) ? $context["link"] : null) == false))) {
                    // line 270
                    echo "\t\t\t\t\t\t\t\t\t\trel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 272
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    // line 273
                    echo "\t\t\t\t\t\t\t\t\t\trel=\"video\"
\t\t\t\t\t\t\t\t\t\t";
                    // line 275
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 276
                echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t";
                // line 278
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 280
            echo "
\t\t\t\t\t\t\t\t";
            // line 281
            if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link"))))) {
                // line 282
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link"), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target"), "_self")) : ("_self")), "html", null, true);
                echo "\" class=\"hi-icon icon-link\" style=\"";
                echo twig_escape_filter($this->env, trim((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t";
            }
            // line 284
            echo "
\t\t\t\t\t\t\t\t";
            // line 285
            if (((!array_key_exists("videoUrl", $context)) && ((!$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true)) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link"))))) {
                // line 286
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "sizes"), "full"), "url"), "html", null, true);
                echo "\" class=\"hi-icon icon-fullscreen gg-colorbox";
                if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "2") && (!array_key_exists("link", $context)))) {
                    echo " pbox";
                }
                echo "\" style=\"";
                echo twig_escape_filter($this->env, trim((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t";
                // line 287
                if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "1") && ((isset($context["link"]) ? $context["link"] : null) == false))) {
                    // line 288
                    echo "\t\t\t\t\t\t\t\t\t\trel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t\t";
                }
                // line 289
                echo ">Open in pop-up window</a>
\t\t\t\t\t\t\t\t";
            }
            // line 291
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 293
        echo "
\t\t\t\t\t\t";
        // line 294
        if (((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true)) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "false"))) {
            // line 295
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "true")) {
                // line 296
                echo "\t\t\t\t\t\t\t\t";
                if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption")))) {
                    // line 297
                    echo "\t\t\t\t\t\t\t\t\t<span style=\"font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
                    echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo ";\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption");
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 299
                echo "\t\t\t\t\t\t\t";
            }
            // line 300
            echo "\t\t\t\t\t\t";
        }
        // line 301
        echo "\t\t\t\t\t";
    }

    // line 305
    public function block_figcaption_after($context, array $blocks = array())
    {
        // line 306
        echo "\t\t\t\t";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true")) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "true"))) {
            // line 307
            echo "
\t\t\t\t\t";
            // line 308
            ob_start();
            // line 309
            echo "\t\t\t\t\t\tcolor:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "foreground"), "html", null, true);
            echo ";
\t\t\t\t\t\tbackground-color:";
            // line 310
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "background"), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-size:";
            // line 311
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
            echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-family:";
            // line 312
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "font_family"), "html", null, true);
            echo ";
\t\t\t\t\t\t";
            // line 313
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_align") != 3)) {
                // line 314
                echo "\t\t\t\t\t\t\ttext-align:";
                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_align"), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
\t\t\t\t\t\t";
            }
            // line 316
            echo "\t\t\t\t\t\t";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect") == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "false"))) {
                // line 317
                echo "\t\t\t\t\t\t\topacity:1;
\t\t\t\t\t\t\tbottom:0;
\t\t\t\t\t\t";
            }
            // line 320
            echo "\t\t\t\t\t\tvertical-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), "html", null, true);
            echo ";
\t\t\t\t\t";
            $context["captionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 322
            echo "
\t\t\t\t\t";
            // line 323
            if (((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption"))) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "tooltip") == "false"))) {
                // line 324
                echo "\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"caption-with-";
                // line 325
                if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"), "html", null, true);
                } else {
                    echo "icons";
                }
                echo "\"
\t\t\t\t\t\tstyle=\"";
                // line 326
                echo twig_escape_filter($this->env, (isset($context["captionStyle"]) ? $context["captionStyle"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\tdata-alpha=\"";
                // line 327
                echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "transparency")), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div style=\"display: table; height:100%; width:100%;\">
\t\t\t\t\t\t\t";
                // line 329
                if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption")))) {
                    // line 330
                    echo "\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
                    echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo "; font-weight: 800;
\t\t\t\t\t\t\t\tvertical-align:";
                    // line 331
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t";
                    // line 332
                    echo $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption");
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                } else {
                    // line 335
                    echo "\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
                    echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\tvertical-align:";
                    // line 336
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t";
                    // line 337
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "title"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                }
                // line 340
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 343
            echo "\t\t\t\t";
        }
        // line 344
        echo "\t\t\t";
    }

    // line 347
    public function block_figure_after($context, array $blocks = array())
    {
        // line 348
        echo "\t\t";
        if (((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true)) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "false"))) {
            // line 349
            echo "\t\t\t</a>
\t\t";
        }
        // line 351
        echo "\t";
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/helpers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1060 => 351,  1056 => 349,  1053 => 348,  1050 => 347,  1046 => 344,  1043 => 343,  1038 => 340,  1032 => 337,  1028 => 336,  1022 => 335,  1016 => 332,  1012 => 331,  1006 => 330,  1004 => 329,  999 => 327,  995 => 326,  987 => 325,  984 => 324,  982 => 323,  979 => 322,  973 => 320,  968 => 317,  965 => 316,  959 => 314,  957 => 313,  953 => 312,  948 => 311,  944 => 310,  939 => 309,  937 => 308,  934 => 307,  931 => 306,  928 => 305,  924 => 301,  921 => 300,  918 => 299,  909 => 297,  906 => 296,  903 => 295,  901 => 294,  898 => 293,  894 => 291,  890 => 289,  886 => 288,  884 => 287,  873 => 286,  871 => 285,  868 => 284,  858 => 282,  856 => 281,  853 => 280,  849 => 278,  846 => 276,  843 => 275,  840 => 273,  838 => 272,  834 => 270,  832 => 269,  828 => 268,  824 => 267,  821 => 266,  817 => 265,  813 => 264,  809 => 263,  806 => 262,  801 => 260,  796 => 259,  794 => 258,  791 => 257,  789 => 256,  786 => 255,  783 => 254,  777 => 252,  774 => 251,  772 => 250,  767 => 249,  764 => 248,  762 => 247,  757 => 246,  754 => 245,  752 => 244,  749 => 243,  747 => 242,  742 => 240,  736 => 239,  733 => 238,  730 => 237,  728 => 236,  725 => 235,  719 => 225,  714 => 224,  708 => 222,  705 => 221,  702 => 220,  698 => 216,  695 => 215,  690 => 212,  688 => 211,  684 => 210,  680 => 209,  675 => 208,  671 => 207,  666 => 206,  663 => 205,  658 => 202,  655 => 201,  649 => 198,  647 => 197,  642 => 196,  639 => 195,  636 => 194,  631 => 188,  625 => 186,  622 => 185,  616 => 183,  614 => 182,  605 => 180,  597 => 179,  589 => 178,  584 => 177,  581 => 176,  577 => 128,  574 => 127,  571 => 126,  567 => 124,  561 => 122,  558 => 121,  555 => 120,  553 => 119,  549 => 118,  545 => 117,  542 => 116,  538 => 115,  535 => 114,  531 => 112,  529 => 111,  516 => 78,  512 => 76,  509 => 75,  503 => 73,  499 => 71,  493 => 69,  489 => 68,  485 => 67,  480 => 66,  477 => 65,  473 => 82,  469 => 80,  464 => 64,  461 => 63,  458 => 62,  453 => 347,  449 => 345,  442 => 302,  440 => 235,  436 => 233,  430 => 232,  428 => 231,  412 => 217,  400 => 176,  390 => 172,  385 => 170,  382 => 169,  374 => 166,  371 => 165,  368 => 164,  366 => 163,  363 => 162,  354 => 159,  351 => 158,  345 => 156,  342 => 155,  339 => 154,  337 => 153,  328 => 150,  325 => 149,  322 => 148,  319 => 147,  316 => 146,  313 => 145,  308 => 143,  305 => 142,  303 => 141,  299 => 139,  293 => 137,  288 => 136,  286 => 135,  282 => 133,  278 => 132,  271 => 128,  269 => 109,  265 => 107,  262 => 106,  259 => 105,  256 => 104,  250 => 102,  244 => 100,  238 => 98,  232 => 96,  226 => 94,  223 => 93,  220 => 92,  217 => 91,  206 => 86,  201 => 84,  198 => 83,  193 => 61,  185 => 57,  182 => 56,  176 => 54,  171 => 52,  168 => 51,  161 => 48,  158 => 47,  156 => 46,  151 => 45,  148 => 44,  146 => 43,  143 => 42,  138 => 39,  133 => 37,  129 => 35,  127 => 34,  120 => 31,  117 => 30,  115 => 29,  112 => 28,  105 => 25,  99 => 23,  96 => 22,  91 => 20,  84 => 17,  80 => 15,  77 => 14,  71 => 12,  68 => 11,  65 => 9,  62 => 8,  48 => 6,  43 => 5,  33 => 3,  28 => 1,  539 => 158,  536 => 157,  532 => 150,  526 => 110,  523 => 109,  518 => 147,  515 => 146,  507 => 142,  504 => 141,  500 => 138,  497 => 70,  486 => 113,  481 => 110,  478 => 109,  474 => 107,  471 => 106,  467 => 65,  465 => 103,  459 => 102,  455 => 101,  451 => 100,  447 => 305,  443 => 97,  441 => 96,  438 => 95,  434 => 93,  432 => 92,  429 => 91,  425 => 89,  421 => 226,  419 => 220,  415 => 218,  409 => 194,  407 => 193,  402 => 190,  396 => 174,  393 => 173,  388 => 171,  384 => 74,  379 => 168,  377 => 167,  373 => 71,  369 => 70,  365 => 69,  361 => 68,  357 => 160,  353 => 66,  348 => 157,  343 => 63,  340 => 62,  334 => 152,  331 => 59,  326 => 57,  323 => 56,  317 => 54,  314 => 53,  310 => 144,  307 => 50,  301 => 48,  298 => 47,  294 => 45,  291 => 44,  287 => 42,  284 => 41,  279 => 39,  276 => 131,  273 => 37,  267 => 35,  263 => 33,  261 => 32,  253 => 31,  245 => 30,  241 => 99,  234 => 28,  227 => 27,  222 => 26,  213 => 89,  209 => 87,  207 => 21,  203 => 85,  199 => 19,  195 => 62,  190 => 60,  187 => 16,  183 => 13,  173 => 53,  165 => 9,  155 => 8,  145 => 7,  142 => 6,  139 => 5,  136 => 38,  124 => 33,  116 => 159,  114 => 157,  106 => 151,  104 => 146,  100 => 144,  98 => 141,  94 => 21,  92 => 137,  89 => 136,  86 => 135,  81 => 132,  74 => 130,  70 => 129,  64 => 128,  61 => 127,  50 => 7,  47 => 117,  45 => 116,  41 => 114,  39 => 16,  35 => 14,  32 => 4,  30 => 2,  27 => 2,  25 => 1,);
    }
}
