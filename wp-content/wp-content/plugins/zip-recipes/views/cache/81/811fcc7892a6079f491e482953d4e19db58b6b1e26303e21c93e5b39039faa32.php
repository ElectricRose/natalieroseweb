<?php

/* create-update-recipe.twig */
class __TwigTemplate_a40742ae079e649d1dc2a9f18dc772708607b68c9d008ac0ee7205c9f1c93d01 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--suppress HtmlUnknownTarget -->
<head>
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["pluginurl"]) ? $context["pluginurl"] : null), "html", null, true);
        echo "/styles/zlrecipe-dlog.css\" type=\"text/css\" media=\"all\" />
    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        var args = top.tinymce.activeEditor.windowManager.getParams();
        var editor = args['editor'];
        function amdZLRecipeSubmitForm() {
            var title = document.forms['recipe_form']['recipe_title'].value;

            if (title == null || title == '') {
                var jQrecipeTitle = \$('#recipe-title');
                jQrecipeTitle.find('input').addClass('input-error');
                jQrecipeTitle.append('<p class=\"error-message\">You must enter a title for your recipe.</p>');

                return false;
            }

            var jQingredients = \$('#z_recipe_ingredients');
            var jQingredientsTextarea = jQingredients.find('textarea');
            var ingredients = jQingredientsTextarea.val();
            if (ingredients == null || ingredients == '' || ingredients == undefined) {
                jQingredientsTextarea.addClass('input-error');
                jQingredients.append('<p class=\"error-message\">You must enter at least one ingredient.</p>');

                return false;
            }
            var shortcode = '[amd-zlrecipe-recipe:";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["recipe_id"]) ? $context["recipe_id"] : null), "html", null, true);
        echo "]';
            editor.execCommand('mceInsertContent', false, shortcode);
            top.tinymce.activeEditor.windowManager.close(window);
        }

        \$(document).ready(function () {
            \$('#more-options').hide();
            \$('#more-options-toggle').click(function () {
                \$('#more-options').toggle(400);
                return false;
            });

            \$('#upload-btn').click(function (e) {
                e.preventDefault();
                window.parent.zrdnAddImageHandler(zrdnRecipeImageSelected);
            });

            \$('#skip-button').click(function (e) {
                e.preventDefault();
                Cookies.set('skip-registration', 1, {expires: 7, path: '/'});
                \$(this).closest('form').remove();
            });

            var recipe_image_url = \$('#recipe_image').val();
            if (recipe_image_url)
            {
                zrdnRecipeImageSelected({url: recipe_image_url});
            }

            // Set focus to ingredients because in WP4.3 focus remains in the tinyMCE editor
            \$ingredients = \$('#ingredients');
            \$ingredients.focus();

            // Set data-caption attr of summary textarea to false if user types in it or if there's text in it.
            var \$recipeSummaryTextarea = \$('textarea#summary');
            \$recipeSummaryTextarea.keyup(function ()
            {
                \$recipeSummaryTextarea.data('caption', 'false');
            });
            if (\$recipeSummaryTextarea.val())
            {
                \$recipeSummaryTextarea.data('caption', 'false');
            }

        });


        function zrdnRecipeImageSelected(imageData) {
            // This will return the selected image from the Media Uploader, the result is an object

            // Get image container
            // Show it
            // Set \$image src to url
            // scale image
            if (imageData.url)
            {
                var \$imageContainer = \$('#recipe-image-preview-container'),
                        \$uploadImageContainer = \$('#upload-recipe-image-button-container');

                // Set UI state
                \$imageContainer.show();
                \$uploadImageContainer.hide();

                \$('#recipe_image').val(imageData.url);

                var \$image = \$('#recipe-image-preview').
                        attr('src', imageData.url);

                var defaultHeight = 100;

                // width seems to be set proportionally!
                \$image.height(defaultHeight);

                // Set Recipe Summary to image caption if image caption exists and
                //  if data-caption attr of summary textarea is true
                var \$recipeSummaryTextarea = \$('textarea#summary');
                if (imageData.caption && \$recipeSummaryTextarea.data('caption') === true)
                {
                    \$recipeSummaryTextarea.val(imageData.caption);
                    \$('#more-options').show(400);
                }
            }
        }


        function zrdnResetImage()
        {
            var \$imageContainer = \$('#recipe-image-preview-container'),
                    \$uploadImageContainer = \$('#upload-recipe-image-button-container');

            \$imageContainer.hide();
            \$uploadImageContainer.show();

            \$('#recipe_image').val('');
        }
    </script>
    ";
        // line 125
        if ((isset($context["post_info"]) ? $context["post_info"] : null)) {
            // line 126
            echo "        <script>window.onload = amdZLRecipeSubmitForm;</script>
    ";
        }
        // line 128
        echo "</head>

<body id=\"amd-zlrecipe-uploader\">
    ";
        // line 132
        echo "        <form enctype='multipart/form-data' method='post' action='' name='recipe_form'>
            ";
        // line 133
        if ((isset($context["registration_required"]) ? $context["registration_required"] : null)) {
            // line 134
            echo "                <h3 >Please <a href=\"";
            echo (isset($context["recipe_url"]) ? $context["recipe_url"] : null);
            echo "&register=1\">register</a> ZipRecipes plugin, it is free.</h3>
            ";
        }
        // line 136
        echo "            <h3 class='amd-zlrecipe-title'>";
        echo (isset($context["iframe_title"]) ? $context["iframe_title"] : null);
        echo "</h3>
            <div id='amd-zlrecipe-form-items'>
                <input type='hidden' name='recipe_post_id' value='";
        // line 138
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "' />
                <input type='hidden' name='recipe_id' value='";
        // line 139
        echo (isset($context["recipe_id"]) ? $context["recipe_id"] : null);
        echo "' />
                <p id='recipe-title'><label for='recipe_title'>Title <span class='required'>*</span></label> <input type='text' id='recipe_title' name='recipe_title' value='";
        // line 140
        echo (isset($context["recipe_title"]) ? $context["recipe_title"] : null);
        echo "' /></p>
                <p id='recipe-image'>
                <div style=\"float:left; margin-left: 16px;\">
                    <label>Image</label>
                    <input type='hidden' id=\"recipe_image\" name='recipe_image' value='";
        // line 144
        echo (isset($context["recipe_image"]) ? $context["recipe_image"] : null);
        echo "' />
                </div>
                <div id=\"upload-recipe-image-button-container\" style=\"float: left; margin-left: 25px; padding-top: 5px;\">
                    <a id=\"upload-btn\" href=\"#\">Add Image</a>
                </div>
                <div id=\"recipe-image-preview-container\" style=\"display: none; float: left; margin-left: 25px; text-align: center;\">
                    <img id=\"recipe-image-preview\" src=\"\" style=\"display: block\" />
                    <a href=\"javascript:zrdnResetImage()\">Remove Image</a>
                </div>
                </p>
                <div style=\"clear: both\"></div>
                ";
        // line 155
        echo (isset($context["author_section"]) ? $context["author_section"] : null);
        echo "
                <p id='z_recipe_ingredients' class='cls'>
                    <label>Ingredients
                        <span class='required'>*</span>
                        <small>Put each ingredient on a separate line.  There is no need to use bullets for your ingredients.</small>
                        <small>You can also create labels, hyperlinks, bold/italic effects and even add images!
                            <a href=\"https://www.ziprecipes.net/wp-content/uploads/2014/12/plugin-instructions-4.0.0.9.pdf\" target=\"_blank\">Learn how here</a>
                        </small>
                    </label>
                    <textarea name='ingredients' id='ingredients'>";
        // line 164
        echo (isset($context["ingredients"]) ? $context["ingredients"] : null);
        echo "</textarea>
                </p>
                <p id='amd-zlrecipe-instructions' class='cls'>
                    <label>Instructions
                        <small>Press return after each instruction. There is no need to number your instructions.</small>
                        <small>You can also create labels, hyperlinks, bold/italic effects and even add images!
                            <a href=\"https://www.ziprecipes.net/wp-content/uploads/2014/12/plugin-instructions-4.0.0.9.pdf\" target=\"_blank\">Learn how here</a>
                        </small>
                    </label>
                    <textarea name='instructions'>";
        // line 173
        echo (isset($context["instructions"]) ? $context["instructions"] : null);
        echo "</textarea>
                </p>
                <p><a href='#' id='more-options-toggle'>More options</a></p>
                <div id='more-options'>
                    <p><label>Category</label> <input placeholder=\"e.g. appetizer, entree, etc.\" type='text' name='category' value='";
        // line 177
        echo (isset($context["category"]) ? $context["category"] : null);
        echo "' /></p>
                    <p><label>Cuisine</label> <input placeholder=\"e.g. French, Ethiopian, etc.\" type='text' name='cuisine' value='";
        // line 178
        echo (isset($context["cuisine"]) ? $context["cuisine"] : null);
        echo "' /></p>
                    <p class='cls'><label>Summary</label>
                        <textarea id='summary' name='summary' data-caption=\"true\">";
        // line 180
        echo (isset($context["summary"]) ? $context["summary"] : null);
        echo "</textarea></p>
                    <p class=\"cls\"><label>Prep Time</label>
                        ";
        // line 182
        echo (isset($context["prep_time_input"]) ? $context["prep_time_input"] : null);
        echo "
                        <span class=\"time\">
                            <span><input type='number' min=\"0\" max=\"24\" name='prep_time_hours' value='";
        // line 184
        echo (isset($context["prep_time_hours"]) ? $context["prep_time_hours"] : null);
        echo "' /><label>hours</label></span>
                            <span><input type='number' min=\"0\" max=\"60\" name='prep_time_minutes' value='";
        // line 185
        echo (isset($context["prep_time_minutes"]) ? $context["prep_time_minutes"] : null);
        echo "' /><label>minutes</label></span>
                        </span>
                    </p>
                    <p class=\"cls\"><label>Cook Time</label>
                        ";
        // line 189
        echo (isset($context["cook_time_input"]) ? $context["cook_time_input"] : null);
        echo "
                        <span class=\"time\">
                            <span><input type='number' min=\"0\" max=\"24\" name='cook_time_hours' value='";
        // line 191
        echo (isset($context["cook_time_hours"]) ? $context["cook_time_hours"] : null);
        echo "' /><label>hours</label></span>
                            <span><input type='number' min=\"0\" max=\"60\" name='cook_time_minutes' value='";
        // line 192
        echo (isset($context["cook_time_minutes"]) ? $context["cook_time_minutes"] : null);
        echo "' /><label>minutes</label></span>
                        </span>
                    </p>
                    <p class=\"cls\"><label>Total Time</label>
                        ";
        // line 196
        echo (isset($context["total_time_input"]) ? $context["total_time_input"] : null);
        echo "
                        <span class=\"time\">
                            <span><input type='number' min=\"0\" max=\"24\" name='total_time_hours' value='";
        // line 198
        echo (isset($context["total_time_hours"]) ? $context["total_time_hours"] : null);
        echo "' /><label>hours</label></span>
                            <span><input type='number' min=\"0\" max=\"60\" name='total_time_minutes' value='";
        // line 199
        echo (isset($context["total_time_minutes"]) ? $context["total_time_minutes"] : null);
        echo "' /><label>minutes</label></span>
                        </span>
                    </p>
                    <p><label>Yield</label> <input type='text' name='yield' value='";
        // line 202
        echo (isset($context["yield"]) ? $context["yield"] : null);
        echo "' /></p>
                    <p><label>Serving Size</label> <input type='text' name='serving_size' value='";
        // line 203
        echo (isset($context["serving_size"]) ? $context["serving_size"] : null);
        echo "' /></p>
                    <p><label>Calories</label> <input type='text' name='calories' value='";
        // line 204
        echo (isset($context["calories"]) ? $context["calories"] : null);
        echo "' /></p>
                    <p><label>Carbs</label> <input type='text' name='carbs' value='";
        // line 205
        echo (isset($context["carbs"]) ? $context["carbs"] : null);
        echo "' /></p>
                    <p><label>Protein</label> <input type='text' name='protein' value='";
        // line 206
        echo (isset($context["protein"]) ? $context["protein"] : null);
        echo "' /></p>
                    <p><label>Fiber</label> <input type='text' name='fiber' value='";
        // line 207
        echo (isset($context["fiber"]) ? $context["fiber"] : null);
        echo "' /></p>
                    <p><label>Sugar</label> <input type='text' name='sugar' value='";
        // line 208
        echo (isset($context["sugar"]) ? $context["sugar"] : null);
        echo "' /></p>
                    <p><label>Sodium</label> <input type='text' name='sodium' value='";
        // line 209
        echo (isset($context["sodium"]) ? $context["sodium"] : null);
        echo "' /></p>
                    <p><label>Fat</label> <input type='text' name='fat' value='";
        // line 210
        echo (isset($context["fat"]) ? $context["fat"] : null);
        echo "' /></p>
                    <p><label>Saturated fat</label> <input type='text' name='saturated_fat' value='";
        // line 211
        echo (isset($context["saturated_fat"]) ? $context["saturated_fat"] : null);
        echo "' /></p>
                    <p><label>Trans. Fat</label> <input type='text' name='trans_fat' value='";
        // line 212
        echo (isset($context["trans_fat"]) ? $context["trans_fat"] : null);
        echo "' /></p>
                    <p><label>Cholesterol</label> <input type='text' name='cholesterol' value='";
        // line 213
        echo (isset($context["cholesterol"]) ? $context["cholesterol"] : null);
        echo "' /></p>
                    <p class='cls'><label>Notes</label> <textarea name='notes'>";
        // line 214
        echo (isset($context["notes"]) ? $context["notes"] : null);
        echo "</textarea></p>
                </div>
                <input type='submit' value='";
        // line 216
        echo (isset($context["submit"]) ? $context["submit"] : null);
        echo "' name='add-recipe-button' />
            </div>
        </form>
    ";
        // line 220
        echo "</body>
";
    }

    public function getTemplateName()
    {
        return "create-update-recipe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 220,  353 => 216,  348 => 214,  344 => 213,  340 => 212,  336 => 211,  332 => 210,  328 => 209,  324 => 208,  320 => 207,  316 => 206,  312 => 205,  308 => 204,  304 => 203,  300 => 202,  294 => 199,  290 => 198,  285 => 196,  278 => 192,  274 => 191,  269 => 189,  262 => 185,  258 => 184,  253 => 182,  248 => 180,  243 => 178,  239 => 177,  232 => 173,  220 => 164,  208 => 155,  194 => 144,  187 => 140,  183 => 139,  179 => 138,  173 => 136,  167 => 134,  165 => 133,  162 => 132,  157 => 128,  153 => 126,  151 => 125,  52 => 29,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "create-update-recipe.twig", "/nas/content/live/natalierose/wp-content/plugins/zip-recipes/views/create-update-recipe.twig");
    }
}
