<?php

/* @galleries/shortcode/import.twig */
class __TwigTemplate_c76f7c49afdb13f3b7d2cf13be6f8ddef3835a215fc85a1502bc60ba9816d5e3 extends Twig_Template
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
    }

    // line 1
    public function getshow($_areaWidth = null, $_galleryId = null)
    {
        $context = $this->env->mergeGlobals(array(
            "areaWidth" => $_areaWidth,
            "galleryId" => $_galleryId,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"media-wrapr ";
            if (twig_test_empty((isset($context["galleryId"]) ? $context["galleryId"] : null))) {
                echo "no-gallery-id";
            }
            echo "\" style=\"width: ";
            echo twig_escape_filter($this->env, (isset($context["areaWidth"]) ? $context["areaWidth"] : null), "html", null, true);
            echo "px;margin: 0 auto !important;display: block;\">
        <h1>";
            // line 3
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose source")), "html", null, true);
            echo "</h1>
        <button class=\"button button-primary button-hero gallery\" id=\"gg-btn-upload\" data-folder-id=\"0\"
                style=\"width: 400px;\"
                data-gallery-id=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["galleryId"]) ? $context["galleryId"] : null), "html", null, true);
            echo "\" data-upload>
            <i class=\"fa fa-wordpress fa-2x\"></i>
            ";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from WordPress Media Library")), "html", null, true);
            echo "
        </button>
        <h3>";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from social networks")), "html", null, true);
            echo "</h3>
        <a class=\"button button-primary button-hero\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "insta", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
            echo "\" style=\"width: 400px;margin-bottom: 20px;\">
            <i class=\"fa fa-instagram fa-2x\"></i>
            ";
            // line 13
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Instagram account")), "html", null, true);
            echo "
        </a>
        ";
            // line 15
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
                // line 16
                echo "            <a class=\"button button-primary button-hero\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "flickr", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-flickr fa-2x\"></i>
                ";
                // line 18
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Flickr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "tumblr", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-tumblr fa-2x\"></i>
                ";
                // line 22
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Tumblr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "facebook", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-facebook fa-2x\"></i>
                ";
                // line 26
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Facebook account")), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 29
                echo "            <h3>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get Pro to enable import")), "html", null, true);
                echo "</h3>
            <a class=\"button button-primary button-hero\" href=\"http://supsystic.com/plugins/photo-gallery/\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-unlock fa-2x\"></i>
                ";
                // line 32
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get PRO")), "html", null, true);
                echo "
            </a>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-flickr fa-2x\"></i>
                ";
                // line 38
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Flickr account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-tumblr fa-2x\"></i>
                ";
                // line 44
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Tumblr account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-facebook fa-2x\"></i>
                ";
                // line 50
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Facebook account")), "html", null, true);
                echo "
            </button>
        ";
            }
            // line 53
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 53,  149 => 50,  144 => 48,  137 => 44,  132 => 42,  125 => 38,  120 => 36,  113 => 32,  106 => 29,  100 => 26,  90 => 22,  85 => 20,  80 => 18,  74 => 16,  67 => 13,  62 => 11,  48 => 6,  42 => 3,  78 => 18,  75 => 17,  72 => 15,  69 => 15,  66 => 14,  63 => 13,  58 => 10,  55 => 10,  52 => 9,  44 => 6,  41 => 5,  39 => 4,  36 => 3,  33 => 2,  46 => 2,  21 => 1,  1946 => 4,  1934 => 3,  1926 => 1209,  1922 => 1208,  1916 => 1205,  1912 => 1204,  1906 => 1201,  1902 => 1200,  1896 => 1197,  1892 => 1196,  1887 => 1193,  1876 => 1190,  1867 => 1189,  1862 => 1188,  1860 => 1171,  1855 => 1169,  1852 => 1168,  1848 => 1023,  1838 => 1019,  1829 => 1013,  1825 => 1012,  1820 => 1010,  1811 => 1004,  1807 => 1003,  1802 => 1002,  1797 => 1001,  1794 => 1000,  1789 => 875,  1780 => 867,  1776 => 866,  1769 => 862,  1763 => 859,  1760 => 858,  1757 => 857,  1752 => 872,  1750 => 857,  1744 => 854,  1740 => 853,  1733 => 849,  1727 => 846,  1723 => 844,  1720 => 843,  1709 => 834,  1705 => 833,  1701 => 832,  1697 => 831,  1693 => 830,  1686 => 829,  1682 => 828,  1678 => 827,  1674 => 826,  1670 => 825,  1666 => 824,  1658 => 819,  1649 => 813,  1642 => 809,  1631 => 801,  1627 => 800,  1622 => 798,  1618 => 797,  1610 => 792,  1601 => 786,  1594 => 782,  1585 => 776,  1578 => 772,  1569 => 766,  1562 => 762,  1553 => 756,  1546 => 752,  1537 => 746,  1530 => 742,  1521 => 736,  1514 => 732,  1508 => 728,  1506 => 725,  1501 => 722,  1498 => 718,  1496 => 717,  1492 => 715,  1489 => 714,  1480 => 569,  1476 => 568,  1468 => 563,  1462 => 560,  1458 => 558,  1455 => 557,  1450 => 553,  1442 => 548,  1438 => 547,  1431 => 543,  1426 => 541,  1420 => 537,  1410 => 527,  1404 => 524,  1397 => 520,  1392 => 518,  1386 => 514,  1384 => 513,  1380 => 511,  1377 => 507,  1375 => 506,  1371 => 504,  1368 => 503,  1363 => 496,  1361 => 483,  1357 => 481,  1355 => 472,  1351 => 470,  1348 => 457,  1345 => 456,  1338 => 498,  1336 => 456,  1332 => 454,  1330 => 449,  1326 => 447,  1324 => 445,  1320 => 443,  1318 => 441,  1314 => 439,  1312 => 437,  1308 => 435,  1306 => 434,  1302 => 432,  1300 => 430,  1296 => 428,  1294 => 426,  1290 => 424,  1288 => 420,  1283 => 417,  1280 => 413,  1278 => 412,  1274 => 410,  1271 => 409,  1263 => 403,  1261 => 402,  1257 => 400,  1255 => 399,  1251 => 397,  1249 => 396,  1245 => 394,  1243 => 393,  1239 => 391,  1237 => 390,  1228 => 384,  1222 => 383,  1217 => 381,  1211 => 380,  1206 => 378,  1200 => 377,  1193 => 373,  1183 => 366,  1176 => 362,  1166 => 355,  1160 => 354,  1156 => 353,  1150 => 352,  1143 => 348,  1136 => 343,  1133 => 342,  1125 => 336,  1123 => 334,  1119 => 332,  1117 => 331,  1113 => 329,  1111 => 327,  1108 => 326,  1105 => 310,  1103 => 299,  1099 => 297,  1096 => 296,  1092 => 266,  1089 => 265,  1082 => 267,  1080 => 265,  1076 => 263,  1074 => 247,  1070 => 245,  1068 => 244,  1063 => 241,  1060 => 237,  1058 => 236,  1054 => 234,  1051 => 233,  1047 => 227,  1044 => 226,  1037 => 228,  1035 => 226,  1031 => 224,  1029 => 222,  1025 => 220,  1023 => 218,  1019 => 216,  1017 => 214,  1014 => 213,  1010 => 206,  1008 => 205,  1004 => 203,  1002 => 201,  998 => 199,  996 => 197,  992 => 195,  990 => 193,  987 => 192,  983 => 188,  981 => 179,  974 => 175,  965 => 169,  961 => 168,  954 => 163,  952 => 162,  948 => 160,  945 => 159,  941 => 1168,  931 => 1161,  926 => 1159,  920 => 1156,  916 => 1155,  912 => 1154,  906 => 1151,  901 => 1150,  899 => 1149,  892 => 1145,  885 => 1141,  860 => 1118,  850 => 1114,  844 => 1111,  834 => 1110,  824 => 1109,  821 => 1108,  817 => 1107,  813 => 1105,  811 => 1033,  805 => 1030,  800 => 1028,  794 => 1024,  792 => 1000,  787 => 998,  784 => 997,  778 => 996,  771 => 992,  765 => 989,  753 => 981,  746 => 977,  735 => 972,  729 => 969,  725 => 968,  720 => 967,  717 => 966,  713 => 965,  708 => 963,  705 => 962,  702 => 961,  698 => 959,  696 => 958,  693 => 957,  687 => 955,  685 => 954,  680 => 953,  676 => 952,  672 => 951,  667 => 950,  665 => 949,  659 => 945,  649 => 941,  644 => 939,  638 => 938,  632 => 937,  629 => 936,  625 => 935,  622 => 934,  619 => 933,  616 => 932,  614 => 931,  611 => 930,  609 => 921,  603 => 918,  598 => 916,  590 => 911,  583 => 907,  573 => 900,  568 => 898,  562 => 895,  557 => 893,  552 => 891,  545 => 887,  541 => 886,  534 => 882,  528 => 879,  523 => 877,  520 => 876,  518 => 875,  515 => 874,  513 => 843,  509 => 841,  507 => 714,  500 => 709,  498 => 708,  493 => 705,  491 => 704,  487 => 702,  485 => 698,  481 => 696,  479 => 695,  475 => 693,  473 => 691,  469 => 689,  467 => 685,  463 => 683,  461 => 682,  457 => 680,  455 => 679,  451 => 677,  449 => 676,  445 => 674,  443 => 671,  439 => 669,  437 => 666,  433 => 664,  431 => 661,  428 => 660,  426 => 659,  422 => 657,  420 => 654,  416 => 652,  413 => 648,  409 => 645,  406 => 640,  403 => 639,  400 => 637,  397 => 614,  395 => 607,  392 => 606,  390 => 578,  384 => 574,  382 => 557,  378 => 555,  376 => 503,  373 => 502,  371 => 409,  368 => 408,  366 => 342,  363 => 341,  361 => 296,  353 => 290,  351 => 289,  339 => 280,  335 => 279,  327 => 276,  322 => 274,  317 => 271,  315 => 233,  312 => 232,  310 => 159,  304 => 156,  300 => 155,  296 => 154,  292 => 153,  289 => 152,  286 => 151,  283 => 150,  280 => 149,  272 => 144,  260 => 137,  252 => 136,  246 => 132,  239 => 128,  235 => 126,  222 => 116,  214 => 115,  207 => 110,  201 => 108,  199 => 107,  196 => 106,  194 => 105,  186 => 100,  176 => 93,  171 => 91,  162 => 85,  157 => 83,  148 => 77,  143 => 75,  139 => 74,  136 => 73,  130 => 62,  127 => 61,  124 => 60,  121 => 59,  116 => 55,  111 => 56,  109 => 55,  103 => 52,  95 => 24,  87 => 42,  79 => 37,  68 => 31,  61 => 12,  53 => 8,  50 => 8,  47 => 7,);
    }
}
