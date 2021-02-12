<?php

namespace Jarada\NSBBCode;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__ . '/resources/js/forum/nsbbcode.js'),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBcodes->addCustom(
                '[nation]{SIMPLETEXT}[/nation]',
                '<a href="http://www.nationstates.net/nation={SIMPLETEXT}">{SIMPLETEXT}</a>',
                array('tagName' => 'NationStates Nation')
            );
            $config->BBcodes->addCustom(
                '[nation]{SIMPLETEXT}[/nation]',
                '<a href="http://www.nationstates.net/nation={SIMPLETEXT}">{SIMPLETEXT}</a>',
                array('tagName' => 'NationStates Region')
            );
            $config->BBcodes->addCustom(
                '[align={IDENTIFIER}]{TEXT}[/align]',
                '<div style="text-align:{IDENTIFIER}">{TEXT}</div>',
                array('tagName' => 'Align')
            );
            $config->BBcodes->addCustom(
                '[anchor={IDENTIFIER}]{TEXT}[/anchor]',
                '<a name="{IDENTIFIER}">{TEXT}</a>',
                array('tagName' => 'Anchor')
            );
            $config->BBcodes->addCustom(
                '[box]{TEXT}[/box]',
                '<div class="info-box" style="border: 1px solid #AAA;border-radius: 5px;box-shadow: 2px 2px 2px #aaa;margin: 2px;padding: 5px;background-color: white;">{TEXT}</div>',
                array('tagName' => 'Box')
            );
            $config->BBcodes->addCustom(
                '[float={IDENTIFIER}]{TEXT}[/float]',
                '<div style="float:{IDENTIFIER}; padding:0 10px;">{TEXT}</div>',
                array('tagName' => 'Float')
            );
            $config->BBcodes->addCustom(
                '[goto={IDENTIFIER}]{TEXT}[/goto]',
                '<a href="#{IDENTIFIER}">{TEXT}</a>',
                array('tagName' => 'Go To Anchor')
            );
            $config->BBcodes->addCustom(
                '[gm]{TEXT}[/gm]',
                '<div class="offtopic" style="position:relative;margin:5px 0;padding:39px 19px 14px;background:#fff;border:1px solid #ddd;border-radius:4px;"><div class="offtopic_title" style="position:absolute;top:-1px;left:-1px;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;font-weight:bold;font-size:12px;color:#9da0a4;background:#f5f5f5;padding:5px 12px;border:1px solid #ddd;border-radius:4px 0 4px 0;">Game Master</div><div class="offtopic_text" style="padding:5px 10px;color:#333333;">{TEXT}</div></div>',
                array('tagName' => 'Game Master')
            );
            $config->BBcodes->addCustom(
                '[hr][/hr]',
                '<hr/>',
                array('tagName' => 'Horizontal Rule')
            );
            $config->BBcodes->addCustom(
                '[nrp]{TEXT}[/nrp]',
                '<div class="offtopic" style="position:relative;margin:5px 0;padding:39px 19px 14px;background:#fff;border:1px solid #ddd;border-radius:4px;"><div class="offtopic_title" style="position:absolute;top:-1px;left:-1px;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;font-weight:bold;font-size:12px;color:#9da0a4;background:#f5f5f5;padding:5px 12px;border:1px solid #ddd;border-radius:4px 0 4px 0;">Not Roleplay</div><div class="offtopic_text" style="padding:5px 10px;color:#333333;">{TEXT}</div></div>',
                array('tagName' => 'Not Roleplay')
            );
            $config->BBcodes->addCustom(
                '[nrps]{TEXT}[/nrps]',
                '<div class="spoilwrapper" style="margin:5px 0;font-weight:normal;padding:4px 10px;background-color:#fff;border:1px solid #dbdbdb;border-radius:4px;color:#333333;"><div class="spoiltitle" style="margin:0;padding:0;width:100%;"><span class="spoilbtn" style="margin:2px 5px;text-transform:uppercase;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;font-size:11px;font-weight:bold;display:block;cursor:pointer;color:#333;" data-show="► Not Roleplay" data-hide="▼ Not Roleplay">► Not Roleplay</span></div><div class="spoilcontent" style="color:#333333;display:none;padding:5px;border-top:1px solid #ccc;">{TEXT}</div></div>',
                array('tagName' => 'Not Roleplay (Spoiler)')
            );
            $config->BBcodes->addCustom(
                '[offtopic]{TEXT}[/offtopic]',
                '<div class="offtopic" style="position:relative;margin:1em 0;padding:39px 19px 14px;background:#fff;border:1px solid #ddd;border-radius:4px;"><div class="offtopic_title" style="position:absolute;top:-1px;left:-1px;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;font-weight:bold;font-size:12px;color:#9da0a4;background:#f5f5f5;padding:5px 12px;border:1px solid #ddd;border-radius:4px 0 4px 0;">Off Topic</div><div class="offtopic_text" style="padding:5px 10px;color:#333333;">{TEXT}</div></div>',
                array('tagName' => 'Off Topic')
            );
            $config->BBcodes->addCustom(
                '[spoil]{TEXT}[/spoil]',
                '<div class="spoilwrapper" style="margin:1em 0;font-weight:normal;padding:4px 10px;background-color:#fff;border:1px solid #dbdbdb;border-radius:4px;color:#333333;"><div class="spoiltitle" style="margin:0;padding:0;width:100%;"><span class="spoilbtn" style="margin:2px 5px;text-transform:uppercase;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;font-size:11px;font-weight:bold;display:block;cursor:pointer;color:#333;" data-show="► Show Spoiler" data-hide="▼ Hide Spoiler">► Show Spoiler</span></div><div class="spoilcontent" style="color:#333333;display:none;padding:5px;border-top:1px solid #ccc;">{TEXT}</div></div>',
                array('tagName' => 'Spoiler')
            );
            $config->BBcodes->addCustom(
                '[spoiler="{SIMPLETEXT}"]{TEXT}[/spoiler]',
                '<div class="spoilwrapper" style="margin:1em 0;font-weight:normal;padding:4px 10px;background-color:#fff;border:1px solid #dbdbdb;border-radius:4px;color:#333333;"><div class="spoiltitle" style="margin:0;padding:0;width:100%;"><span class="spoilbtn" style="margin:2px 5px;text-transform:uppercase;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;font-size:11px;font-weight:bold;display:block;cursor:pointer;color:#333;" data-show="► {SIMPLETEXT}" data-hide="▼ {SIMPLETEXT}">► {SIMPLETEXT}</span></div><div class="spoilcontent" style="color:#333333;display:none;padding:5px;border-top:1px solid #ccc;">{TEXT}</div></div>',
                array('tagName' => 'Spoiler (Named)')
            );
            $config->BBcodes->addCustom(
                '[sub]{TEXT}[/sub]',
                '<sub style="vertical-align: sub; font-size: smaller;">{TEXT}</sub>',
                array('tagName' => 'Subscript')
            );
            $config->BBcodes->addCustom(
                '[sup]{TEXT}[/sup]',
                '<sup style="vertical-align: super; font-size: smaller;">{TEXT}</sup>',
                array('tagName' => 'Superscript')
            );
            $config->BBcodes->addCustom(
                '[tr]{TEXT}[/tr]',
                '<tr>{TEXT}</tr>',
                array('tagName' => 'Table Row')
            );
            $config->BBcodes->addCustom(
                '[th]{TEXT}[/th]',
                '<th style="color:white; padding: .3em; border: 1px #575757 solid; background: #4F4F4F;">{TEXT}</th>',
                array('tagName' => 'Table Header')
            );
            $config->BBcodes->addCustom(
                '[td]{TEXT}[/td]',
                '<td align="left" style="padding: .3em; border: 1px #ccc solid; background-color: #FFFFcc;">{TEXT}</td>',
                array('tagName' => 'Table Cell')
            );
        })
];
