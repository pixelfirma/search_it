<?php

if (rex_post('sendit', 'boolean')) {

    $posted_config = rex_post('search_it_plaintext', [

        ['order', 'string','selectors,regex,textile,striptags'],
        ['selectors', 'string'],
        ['regex', 'string'],
        ['textile', 'bool' ],
        ['striptags', 'bool' ],
        ['processparent', 'bool' ]

    ]);

    // do it
    $this->setConfig($posted_config);

    //tell it
    echo rex_view::success($this->i18n('search_it_settings_saved'));
    $url = rex::getServer() . rex_url::currentBackendPage();
    header('Location: ' . $url);
}

$func = rex_request('func', 'string');



$content = array();


$content[] = search_it_getSettingsFormSection(
    'search_it_plaintext_description',
    $this->i18n('search_it_plaintext_description_title'),
    array(
        array(
            'type' => 'directoutput',
            'output' => '<i class="fa fa-arrows-v movesymbol"></i>&nbsp;' . $this->i18n('search_it_plaintext_description')
        ),
        array(
            'type' => 'hidden',
            'name' => 'search_it_plaintext[order]',
            'value' => !empty($this->getConfig('order')) ? htmlspecialchars($this->getConfig('order')) : ''
        )
    ),false
);


$content[] =  '<div id="sortable-elements">';

foreach (explode(',', $this->getConfig('order')) as $elem) {
    switch ($elem) {
        case 'selectors':
            $content[] =  search_it_getSettingsFormSection(
                'search_it_plaintext_selectors_fieldset',
                $this->i18n('search_it_plaintext_selectors'),
                array(
                    array(
                        'type' => 'text',
                        'id' => 'search_it_plaintext_selectors',
                        'name' => 'search_it_plaintext[selectors]',
                        'label' => $this->i18n('search_it_plaintext_selectors_label'),
                        'value' => !empty($this->getConfig('selectors')) ? htmlspecialchars($this->getConfig('selectors')) : ''
                    )
                ), 'edit', true
            );
            break;

        case 'regex':
            $content[] =  search_it_getSettingsFormSection(
                'search_it_plaintext_regex_fieldset',
                $this->i18n('search_it_plaintext_regex'),
                array(
                    array(
                        'type' => 'text',
                        'id' => 'search_it_plaintext_regex',
                        'name' => 'search_it_plaintext[regex]',
                        'label' => $this->i18n('search_it_plaintext_regex_label'),
                        'value' => !empty($this->getConfig('regex')) ? htmlspecialchars($this->getConfig('regex')) : ''
                    )
                ), 'edit', true
            );
            break;

        case 'textile':
            $content[] =  search_it_getSettingsFormSection(
                'search_it_plaintext_textile_fieldset',
                $this->i18n('search_it_plaintext_textile'),
                array(
                    array(
                        'type' => 'checkbox',
                        'id' => 'search_it_plaintext_textile',
                        'name' => 'search_it_plaintext[textile]',
                        'label' => $this->i18n('search_it_plaintext_textile_label'),
                        'value' => '1',
                        'checked' => !empty($this->getConfig('textile'))
                    )
                ), 'edit', true
            );
            break;

        case 'striptags':
            $content[] =  search_it_getSettingsFormSection(
                'search_it_plaintext_striptags_fieldset',
                $this->i18n('search_it_plaintext_striptags'),
                array(
                    array(
                        'type' => 'checkbox',
                        'id' => 'search_it_plaintext_striptags',
                        'name' => 'search_it_plaintext[striptags]',
                        'label' => $this->i18n('search_it_plaintext_striptags_label'),
                        'value' => '1',
                        'checked' => !empty($this->getConfig('striptags'))
                    )
                ), 'edit', true
            );
            break;
    }
}

$content[] =  '</div>';

$content[] = search_it_getSettingsFormSection(
    'search_it_plaintext_processparent_fieldset',
    $this->i18n('search_it_plaintext_processparent'),
    array(
        array(
            'type' => 'checkbox',
            'id' => 'search_it_plaintext_processparent',
            'name' => 'search_it_plaintext[processparent]',
            'label' => $this->i18n('search_it_plaintext_processparent_label'),
            'value' => '1',
            'checked' => !empty($this->getConfig('processparent'))
        )
    ),'edit'
);


?>
<script type="text/javascript">
// <![CDATA[
(function($) {
    $(document).ready(function () {
        var mainWidth = jQuery('#search_it_plaintext_form').width();
        var ondrag = false;

        jQuery('#sortable-elements').sortable({
            connectWith: jQuery('#sortable-elements'),
            opacity: 0.9,
            tolerance: 'pointer',
            placeholder: 'placeholder',
            forceHelperSize: true,
            start: function (event, ui) {
                ondrag = true;
            },
            stop: function (event, ui) {

                var order = new Array();
                jQuery('#search_it_plaintext_selectors,#search_it_plaintext_regex,#search_it_plaintext_textile,#search_it_plaintext_striptags').each(function () {
                    order.push(this.name.match(/\[([a-zA-Z]+)\]/)[1]);
                });
                jQuery('input[name="search_it_plaintext[order]"]').attr('value', order.join(','));

                setTimeout(function () {
                    ondrag = false;
                }, 100);
            }
        }).disableSelection();

        jQuery('#sortable-elements .panel-title').each(function () {
            jQuery(this).parent().css('cursor', 'move').css('z-index','10000');
            var text = jQuery(this).html();
            jQuery(this).html('')
                .append(jQuery('<i>').addClass('fa fa-arrows-v').css('padding-right', '18px'))
                .append(text);
        });

        // display links for showing and hiding all sections
        jQuery('#search_it_plaintext_form section .panel-body').first()
            .css('position', 'relative')
            .prepend(
                jQuery('<div>')
                    .css('font-weight', '900')
                    .css('margin-bottom','1em')
                        .append(
                            jQuery('<a><?php echo $this->i18n('search_it_settings_show_all'); ?><' + '/a>')
                                .css('cursor', 'pointer')
                                .css('padding', '0 1em')
                                .click(function () {
                            jQuery('#sortable-elements .panel-collapse').collapse('show');
                                })
                        )
                        .append(
                            jQuery('<a><?php echo $this->i18n('search_it_settings_show_none'); ?><' + '/a>')
                                .css('cursor', 'pointer')
                                .click(function () {
                            jQuery('#sortable-elements .panel-collapse').collapse('hide');
                                })
                        )

            );

    });
}(jQuery));

// ]]>
</script>
<?php
$content = implode( "\n", $content);

$formElements = [];
$n = [];
$n['field'] = '<button class="btn btn-save rex-form-aligned" type="submit" name="sendit" value="1" ' . rex::getAccesskey($this->i18n('search_it_settings_submitbutton'), 'save') . '>' . $this->i18n('search_it_settings_submitbutton') . '</button>';
$formElements[] = $n;
$fragment = new rex_fragment();
$fragment->setVar('flush', true);
$fragment->setVar('elements', $formElements, false);
$buttons = $fragment->parse('core/form/submit.php');

$fragment = new rex_fragment();
$fragment->setVar('title', $this->i18n('search_it_plaintext_title'),'');
$fragment->setVar('class', 'info', false);
$fragment->setVar('body', $content, false);
$fragment->setVar('buttons', $buttons, false);

echo '<form method="post" action="'. rex_url::currentBackendPage() .'" id="search_it_plaintext_form">';
echo $fragment->parse('core/page/section.php');
echo '</form>';
