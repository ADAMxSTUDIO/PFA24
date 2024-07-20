<?php declare(strict_types=1);

namespace PhpParser\Parser;

use PhpParser\Error;
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

/* This is an automatically GENERATED file, which should not be manually edited.
 * Instead edit one of the following:
 *  * the grammar file grammar/php.y
 *  * the skeleton file grammar/parser.template
 *  * the preprocessing script grammar/rebuildParsers.php
 */
class Php8 extends \PhpParser\ParserAbstract
{
    public const YYERRTOK = 256;
    public const T_THROW = 257;
    public const T_INCLUDE = 258;
    public const T_INCLUDE_ONCE = 259;
    public const T_EVAL = 260;
    public const T_REQUIRE = 261;
    public const T_REQUIRE_ONCE = 262;
    public const T_LOGICAL_OR = 263;
    public const T_LOGICAL_XOR = 264;
    public const T_LOGICAL_AND = 265;
    public const T_PRINT = 266;
    public const T_YIELD = 267;
    public const T_DOUBLE_ARROW = 268;
    public const T_YIELD_FROM = 269;
    public const T_PLUS_EQUAL = 270;
    public const T_MINUS_EQUAL = 271;
    public const T_MUL_EQUAL = 272;
    public const T_DIV_EQUAL = 273;
    public const T_CONCAT_EQUAL = 274;
    public const T_MOD_EQUAL = 275;
    public const T_AND_EQUAL = 276;
    public const T_OR_EQUAL = 277;
    public const T_XOR_EQUAL = 278;
    public const T_SL_EQUAL = 279;
    public const T_SR_EQUAL = 280;
    public const T_POW_EQUAL = 281;
    public const T_COALESCE_EQUAL = 282;
    public const T_COALESCE = 283;
    public const T_BOOLEAN_OR = 284;
    public const T_BOOLEAN_AND = 285;
    public const T_AMPERSAND_NOT_FOLLOWED_BY_VAR_OR_VARARG = 286;
    public const T_AMPERSAND_FOLLOWED_BY_VAR_OR_VARARG = 287;
    public const T_IS_EQUAL = 288;
    public const T_IS_NOT_EQUAL = 289;
    public const T_IS_IDENTICAL = 290;
    public const T_IS_NOT_IDENTICAL = 291;
    public const T_SPACESHIP = 292;
    public const T_IS_SMALLER_OR_EQUAL = 293;
    public const T_IS_GREATER_OR_EQUAL = 294;
    public const T_SL = 295;
    public const T_SR = 296;
    public const T_INSTANCEOF = 297;
    public const T_INC = 298;
    public const T_DEC = 299;
    public const T_INT_CAST = 300;
    public const T_DOUBLE_CAST = 301;
    public const T_STRING_CAST = 302;
    public const T_ARRAY_CAST = 303;
    public const T_OBJECT_CAST = 304;
    public const T_BOOL_CAST = 305;
    public const T_UNSET_CAST = 306;
    public const T_POW = 307;
    public const T_NEW = 308;
    public const T_CLONE = 309;
    public const T_EXIT = 310;
    public const T_IF = 311;
    public const T_ELSEIF = 312;
    public const T_ELSE = 313;
    public const T_ENDIF = 314;
    public const T_LNUMBER = 315;
    public const T_DNUMBER = 316;
    public const T_STRING = 317;
    public const T_STRING_VARNAME = 318;
    public const T_VARIABLE = 319;
    public const T_NUM_STRING = 320;
    public const T_INLINE_HTML = 321;
    public const T_ENCAPSED_AND_WHITESPACE = 322;
    public const T_CONSTANT_ENCAPSED_STRING = 323;
    public const T_ECHO = 324;
    public const T_DO = 325;
    public const T_WHILE = 326;
    public const T_ENDWHILE = 327;
    public const T_FOR = 328;
    public const T_ENDFOR = 329;
    public const T_FOREACH = 330;
    public const T_ENDFOREACH = 331;
    public const T_DECLARE = 332;
    public const T_ENDDECLARE = 333;
    public const T_AS = 334;
    public const T_SWITCH = 335;
    public const T_MATCH = 336;
    public const T_ENDSWITCH = 337;
    public const T_CASE = 338;
    public const T_DEFAULT = 339;
    public const T_BREAK = 340;
    public const T_CONTINUE = 341;
    public const T_GOTO = 342;
    public const T_FUNCTION = 343;
    public const T_FN = 344;
    public const T_CONST = 345;
    public const T_RETURN = 346;
    public const T_TRY = 347;
    public const T_CATCH = 348;
    public const T_FINALLY = 349;
    public const T_USE = 350;
    public const T_INSTEADOF = 351;
    public const T_GLOBAL = 352;
    public const T_STATIC = 353;
    public const T_ABSTRACT = 354;
    public const T_FINAL = 3llback,#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle .peopleIcon .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link .peopleIcon .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle .peopleIcon .msbdsb_person_initials .msbdsb_person_icon_fallback{fill:WindowText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle{color:-ms-hotlight;background:Window}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle:hover *,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle:hover *{background:transparent;color:Window;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization.msb_dsb_independent_orgchart,#msb_dsb_root .msbdsb-mp-content .msbdsb_search_suggestions_card,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization.msb_dsb_independent_orgchart,#msb_dsb_brtop .msbdsb-mp-content .msbdsb_search_suggestions_card{background:Window !important}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title{border-radius:6px 6px 0 0;border-bottom:1px solid WindowText;border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title *,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title *{color:WindowText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title:hover,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title:hover{background-color:Highlight}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title:hover *,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title:hover *{background:transparent;color:HighlightText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;border-bottom:1px solid transparent}#msb_dsb_root .msbdsb-mp-content .dsb-label,#msb_dsb_brtop .msbdsb-mp-content .dsb-label{color:WindowText !important}#msb_dsb_root .msbdsb-mp-content .dsb-hero-row,#msb_dsb_brtop .msbdsb-mp-content .dsb-hero-row{-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important;background:transparent}#msb_dsb_root .msbdsb-mp-content .dsb-hero-row .msb-dsb-tooltip.leftAdjust,#msb_dsb_brtop .msbdsb-mp-content .dsb-hero-row .msb-dsb-tooltip.leftAdjust{background:transparent}#msb_dsb_root .msbdsb-mp-content .msb-dsb-tooltip.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msb-dsb-tooltip.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text{border:1px solid WindowText !important;color:WindowText !important;background:Window !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text::after{border-color:WindowText transparent transparent transparent !important}#msb_dsb_root .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text .msb-dsb-tooltip-lines{color:WindowText !important;background:Window !important}#msb_dsb_root .msbdsb-mp-content .info-icon-tooltip-base .info-icon-tooltip,#msb_dsb_brtop .msbdsb-mp-content .info-icon-tooltip-base .info-icon-tooltip{border:1px solid WindowText !important;color:WindowText !important;background:Window !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .info-icon-tooltip-base::before,#msb_dsb_brtop .msbdsb-mp-content .info-icon-tooltip-base::before{border-color:WindowText transparent transparent transparent}#msb_dsb_root .msbdsb-mp-content .info-icon-tooltip-base.msbdsb_keyboard_selected:focus .info_icon,#msb_dsb_brtop .msbdsb-mp-content .info-icon-tooltip-base.msbdsb_keyboard_selected:focus .info_icon{box-shadow:0 0 0 2px Highlight}#msb_dsb_root .msbdsb-mp-content .dismiss_button,#msb_dsb_brtop .msbdsb-mp-content .dismiss_button{background:transparent}#msb_dsb_root .msbdsb-mp-content .dismiss_button div.cancel_icon>svg,#msb_dsb_brtop .msbdsb-mp-content .dismiss_button div.cancel_icon>svg{fill:-ms-hotlight !important}#msb_dsb_root .msbdsb-mp-content .dismiss_button:hover,#msb_dsb_brtop .msbdsb-mp-content .dismiss_button:hover{background:Highlight}#msb_dsb_root .msbdsb-mp-content .dismiss_button:hover div.cancel_icon>svg,#msb_dsb_brtop .msbdsb-mp-content .dismiss_button:hover div.cancel_icon>svg{fill:HighlightText !important}#msb_dsb_root .msbdsb-mp-content div.msbdsb_fluent_icon:not(.msbdsb_pagination_flipper_left_icon,.msbdsb_pagination_flipper_right_icon)>svg>path,#msb_dsb_brtop .msbdsb-mp-content div.msbdsb_fluent_icon:not(.msbdsb_pagination_flipper_left_icon,.msbdsb_pagination_flipper_right_icon)>svg>path{fill:WindowText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card{background:Window !important;border:1px solid WindowText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item{border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item:hover,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item:hover{background:Highlight;color:HighlightText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item:hover *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item:hover *{background:transparent;color:HighlightText !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card{background:Window !important;border:1px solid WindowText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .chat-message-mentioned-name,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .chat-message-link,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .email-message-mentioned-name,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .email-message-link,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .chat-message-mentioned-name,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .chat-message-link,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .email-message-mentioned-name,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .email-message-link{color:WindowText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .overlapping_area,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .overlapping_area>li,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .msbdsb_feed_card_content,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .overlapping_area,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .overlapping_area>li,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .msbdsb_feed_card_content{border-radius:4px}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable:hover div.msbdsb_fluent_icon>svg,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable:hover div.msbdsb_fluent_icon>svg{fill:HighlightText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview{border:1px solid HighlightText;border-radius:4px}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview *{background:Highlight}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_preview_icon,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_preview_icon{background-color:Window}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body .feed_item_content,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body .feed_item_footer,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body .feed_item_content,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body .feed_item_footer,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body *{color:HighlightText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_person_initials,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_person_initials{color:WindowText;background:Window}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_person_initials .msbdsb_person_icon_fallback{fill:WindowText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item .sender_location_icon,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item .sender_location_icon{background:WindowText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item .feed_item_footer,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item .feed_item_footer{color:WindowText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_content.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_content.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;border-radius:4px}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_footer,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_footer{background-color:transparent !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb-peoplehighlights-feed .msbdsb-peoplehighlights-feed-item:hover,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb-peoplehighlights-feed .msbdsb-peoplehighlights-feed-item:hover{background:Highlight !important;color:HighlightText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb-peoplehighlights-feed .msbdsb-peoplehighlights-feed-item:hover *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb-peoplehighlights-feed .msbdsb-peoplehighlights-feed-item:hover *{background:transparent;color:HighlightText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .suggested_entity:hover .entity_title,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .suggested_entity:hover .entity_subtitle,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .suggested_entity:hover .entity_title,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .suggested_entity:hover .entity_subtitle{color:HighlightText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_divider,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_divider{border:.5px solid rgba(255,255,255,.0837)}#msb_dsb_root .msbdsb-mp-content .chat_suggestion,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion{border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bce.msbdsb_keyboard_selected:focus,#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bcb.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bce.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bcb.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;box-shadow:0 0 0 1px Highlight}#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bce:hover,#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bcb:hover,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bce:hover,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bcb:hover{background:Highlight !important;color:WindowText !important}#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bce:hover *,#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bcb:hover *,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bce:hover *,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bcb:hover *{background:transparent;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_selectable,#msb_dsb_brtop .msbdsb_selectable{border:1px solid -ms-hotlight;background:Window !important}#msb_dsb_root .msbdsb_selectable:hover,#msb_dsb_brtop .msbdsb_selectable:hover{background:Highlight !important}#msb_dsb_root .msbdsb_selectable:hover *,#msb_dsb_brtop .msbdsb_selectable:hover *{background:transparent;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_selectable:hover .msbdsb_nested_button *,#msb_dsb_brtop .msbdsb_selectable:hover .msbdsb_nested_button *{color:WindowText !important}#msb_dsb_root .msbdsb_selectable:hover .msbdsb-file-hero-name,#msb_dsb_root .msbdsb_selectable:hover .msbdsb-file-hero-tidbit,#msb_dsb_brtop .msbdsb_selectable:hover .msbdsb-file-hero-name,#msb_dsb_brtop .msbdsb_selectable:hover .msbdsb-file-hero-tidbit{color:HighlightText !important}#msb_dsb_root .msbdsb_selectable .msbdsb_nested_button,#msb_dsb_brtop .msbdsb_selectable .msbdsb_nested_button{border:1px solid -ms-hotlight;background:Window !important}#msb_dsb_root .msbdsb_selectable .msbdsb_nested_button:hover,#msb_dsb_brtop .msbdsb_selectable .msbdsb_nested_button:hover{background:Highlight !important}#msb_dsb_root .msbdsb_selectable .msbdsb_nested_button.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_selectable .msbdsb_nested_button.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;box-shadow:0 0 0 1px Highlight}#msb_dsb_root .msbdsb_hyperlink,#msb_dsb_brtop .msbdsb_hyperlink{color:-ms-hotlight}#msb_dsb_root .msbdsb_hyperlink:hover,#msb_dsb_brtop .msbdsb_hyperlink:hover{text-decoration:underline}#msb_dsb_root .msbdsb_hyperlink.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_hyperlink.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;outline:none !important;border-radius:4px}body[dir] #msb_dsb_root .msbdsb_hyperlink.msbdsb_keyboard_selected:focus,body[dir] #msb_dsb_brtop .msbdsb_hyperlink.msbdsb_keyboard_selected:focus{margin:1px}#msb_dsb_root .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_circle,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_circle{-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_circle .status_icon,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_circle .status_icon{-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_profile .meeting_attendee_icon_container,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_profile .meeting_attendee_icon_container{border:1px solid transparent}#msb_dsb_root .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_profile .meeting_attendee_icon_container.meeting_organizer,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_profile .meeting_attendee_icon_container.meeting_organizer{border-color:Highlight}#msb_dsb_root .msbdsb_meeting_card .suggested_entity,#msb_dsb_brtop .msbdsb_meeting_card .suggested_entity{border:1px solid -ms-hotlight !important}#msb_dsb_root .msbdsb_meeting_card:hover .coloured_bar,#msb_dsb_brtop .msbdsb_meeting_card:hover .coloured_bar{background:WindowText !important}#msb_dsb_root .msbdsb_meeting_card:hover .suggestion_header,#msb_dsb_root .msbdsb_meeting_card:hover *,#msb_dsb_brtop .msbdsb_meeting_card:hover .suggestion_header,#msb_dsb_brtop .msbdsb_meeting_card:hover *{color:HighlightText}#msb_dsb_root .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container,#msb_dsb_brtop .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container{background:Window}#msb_dsb_root .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container .more_icon,#msb_dsb_brtop .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container .more_icon{border-color:-ms-hotlight}#msb_dsb_root .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container:hover,#msb_dsb_brtop .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container:hover{border-color:Highlight !important}#msb_dsb_root .msbdsb_meeting_card .msbdsb_person_initials,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_person_initials{color:WindowText;background:Window}#msb_dsb_root .msbdsb_meeting_card .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_person_initials .msbdsb_person_icon_fallback{fill:WindowText}#msb_dsb_root .msbdsb_meeting_card .coloured_bar,#msb_dsb_brtop .msbdsb_meeting_card .coloured_bar{background:WindowText}#msb_dsb_root .msbdsb_meeting_card .more_files_count,#msb_dsb_root .msbdsb_meeting_card .more_icon,#msb_dsb_brtop .msbdsb_meeting_card .more_files_count,#msb_dsb_brtop .msbdsb_meeting_card .more_icon{color:-ms-hotlight !important}#msb_dsb_root .msbdsb_meeting_card .more_files_count:hover,#msb_dsb_root .msbdsb_meeting_card .more_icon:hover,#msb_dsb_brtop .msbdsb_meeting_card .more_files_count:hover,#msb_dsb_brtop .msbdsb_meeting_card .more_icon:hover{color:HighlightText !important}#msb_dsb_root .msbdsb_meeting_card .more_files_count:hover *,#msb_dsb_root .msbdsb_meeting_card .more_icon:hover *,#msb_dsb_brtop .msbdsb_meeting_card .more_files_count:hover *,#msb_dsb_brtop .msbdsb_meeting_card .more_icon:hover *{color:HighlightText !important}#msb_dsb_root .msbdsb_meeting_card .more_files_count.msbdsb_keyboard_selected:focus,#msb_dsb_root .msbdsb_meeting_card .more_icon.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_meeting_card .more_files_count.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_meeting_card .more_icon.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb_meeting_card .suggested_entity:hover .entity_title,#msb_dsb_root .msbdsb_meeting_card .suggested_entity:hover .entity_subtitle,#msb_dsb_brtop .msbdsb_meeting_card .suggested_entity:hover .entity_title,#msb_dsb_brtop .msbdsb_meeting_card .suggested_entity:hover .entity_subtitle{color:HighlightText !important}#msb_dsb_root .info-icon-tooltip-base .info-icon-tooltip,#msb_dsb_brtop .info-icon-tooltip-base .info-icon-tooltip{border:1px solid WindowText !important;color:WindowText !important;background:Window !important}#msb_dsb_root .info-icon-tooltip-base .info-icon-tooltip::after,#msb_dsb_brtop .info-icon-tooltip-base .info-icon-tooltip::after{border-color:WindowText transparent transparent transparent !important}#msb_dsb_root .msbdsb_learning_card .learning_card_suggestions_container,#msb_dsb_brtop .msbdsb_learning_card .learning_card_suggestions_container{background:transparent}#msb_dsb_root .msbdsb_search_suggestions_card,#msb_dsb_brtop .msbdsb_search_suggestions_card{border:1px solid WindowText}#msb_dsb_root .msbdsb_feed_card:hover .msbdsb_suggestion_pill,#msb_dsb_brtop .msbdsb_feed_card:hover .msbdsb_suggestion_pill{background:Window !important;border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb_feed_card:hover .msbdsb_suggestion_pill .msbdsb_suggestion_contents,#msb_dsb_brtop .msbdsb_feed_card:hover .msbdsb_suggestion_pill .msbdsb_suggestion_contents{color:WindowText !important;fill:WindowText !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover{background:Highlight !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover *,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover *{background:transparent !important;color:HighlightText !important;fill:HighlightText !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text{border:1px solid WindowText !important;color:WindowText !important;background:Window !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after{border-color:WindowText transparent transparent transparent !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines{color:WindowText !important;background:Window !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover{background:Highlight !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover *,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover *,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover *,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover *{background:transparent !important;color:HighlightText !important;fill:HighlightText !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text{border:1px solid WindowText !important;color:WindowText !important;background:Window !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after{border-color:WindowText transparent transparent transparent !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines{color:WindowText !important;background:Window !important}#msb_dsb_root .msbdsb_suggestion_pill,#msb_dsb_brtop .msbdsb_suggestion_pill{background:Window !important;border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb_suggestion_pill .msbdsb_suggestion_contents,#msb_dsb_brtop .msbdsb_suggestion_pill .msbdsb_suggestion_contents{color:WindowText !important;fill:WindowText !important}#msb_dsb_root .msbdsb_suggestion_pill.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_suggestion_pill.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msb_dsb_pagination_flipper,#msb_dsb_brtop .msb_dsb_pagination_flipper{border:1px solid -ms-hotlight}#msb_dsb_root .msb_dsb_pagination_flipper.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msb_dsb_pagination_flipper.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msb_dsb_pagination_flipper *,#msb_dsb_brtop .msb_dsb_pagination_flipper *{background-color:transparent !important}#msb_dsb_root .msb_dsb_pagination_flipper:hover,#msb_dsb_brtop .msb_dsb_pagination_flipper:hover{background-color:Highlight !important}#msb_dsb_root .msb_dsb_pagination_flipper:hover *,#msb_dsb_brtop .msb_dsb_pagination_flipper:hover *{fill:Window !important}#msb_dsb_root .msb_dsb_pagination_dot,#msb_dsb_brtop .msb_dsb_pagination_dot{background-color:WindowText !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card{background-color:Window !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top{background:Window !important;border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top .msbdsb_suggestion_contents,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top .msbdsb_suggestion_contents{color:WindowText !important;fill:WindowText !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover{background:Highlight !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover *,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover *{background:transparent !important;color:HighlightText !important;fill:HighlightText !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text{border:1px solid WindowText !important;color:WindowText !important;background:Window !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text::after{border-color:WindowText transparent transparent transparent !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines{color:WindowText !important;background:Window !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msb-dsb-feedback-tooltip .feedback-button,#msb_dsb_brtop .msb-dsb-feedback-tooltip .feedback-button{border:1px solid -ms-hotlight}#msb_dsb_root .msb-dsb-feedback-tooltip .feedback-button:hover,#msb_dsb_brtop .msb-dsb-feedback-tooltip .feedback-button:hover{background:Highlight !important}#msb_dsb_root .msb-dsb-feedback-tooltip .feedback-button:hover *,#msb_dsb_brtop .msb-dsb-feedback-tooltip .feedback-button:hover *{background:transparent;color:HighlightText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msb-dsb-feedback-tooltip .feedback-button.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msb-dsb-feedback-tooltip .feedback-button.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card{color:WindowText !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background{background:Window !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body .feed_item_content,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body .feed_item_footer,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body *,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body .feed_item_content,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body .feed_item_footer,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body *{color:WindowText !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable{border:1px solid transparent;border-radius:0 !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .overlapping_area,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .overlapping_area>li,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .msbdsb_feed_card_content,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .overlapping_area,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .overlapping_area>li,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .msbdsb_feed_card_content{border-radius:0 !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable.msbdsb_keyboard_selected:focus{border-radius:0 !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover{color:HighlightText !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .chat-message-mentioned-name,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .chat-message-link,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .email-message-mentioned-name,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .email-message-link,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .chat-message-mentioned-name,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .chat-message-link,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .email-message-mentioned-name,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .email-message-link{color:HighlightText !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .msbdsb_feed_item_title div.msbdsb_tidbit_icon>svg,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .msbdsb_feed_item_title div.msbdsb_tidbit_icon>svg{fill:HighlightText !important}#msb_dsb_root .carousel-container .dsb-carousel__button,#msb_dsb_brtop .carousel-container .dsb-carousel__button{background-color:Window;box-shadow:inset 0 0 0 2px -ms-hotlight}#msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{width:0;height:0;border-radius:6px;border-bottom:6px solid rgba(0,0,0,.3);transform:rotate(-90deg)}body[dir='ltr'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,body[dir='ltr'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{border-left:6px solid transparent;border-right:6px solid transparent}body[dir='rtl'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,body[dir='rtl'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{border-right:6px solid transparent;border-left:6px solid transparent}.zeroInput19H1.darkTheme #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,.zeroInput19H1.darkTheme #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{border-bottom-color:rgba(255,255,255,.6)}body[dir='rtl'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,body[dir='rtl'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{transform:rotate(90deg)}#msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{width:0;height:0;border-radius:6px;border-bottom:6px solid rgba(0,0,0,.3);transform:rotate(90deg)}body[dir='ltr'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,body[dir='ltr'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{border-left:6px solid transparent;border-right:6px solid transparent}body[dir='rtl'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,body[dir='rtl'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{border-right:6px solid transparent;border-left:6px solid transparent}.zeroInput19H1.darkTheme #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,.zeroInput19H1.darkTheme #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{border-bottom-color:rgba(255,255,255,.6)}body[dir='rtl'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,body[dir='rtl'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{transform:rotate(-90deg)}#msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,#msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{border-bottom-color:WindowText !important}#msb_dsb_root .carousel-container .dsb-carousel__button:hover,#msb_dsb_brtop .carousel-container .dsb-carousel__button:hover{background-color:Highlight}#msb_dsb_root .carousel-container .dsb-carousel__button:hover .dsb-carousel__prev-arrow,#msb_dsb_root .carousel-container .dsb-carousel__button:hover .dsb-carousel__next-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button:hover .dsb-carousel__prev-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button:hover .dsb-carousel__next-arrow{border-bottom-color:HighlightText !important}.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .msbdsb_feed_card_clickable .overlapping_area,.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .msbdsb_feed_card_clickable .overlapping_area>li,.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .msbdsb_feed_card_clickable .msbdsb_feed_card_content,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .msbdsb_feed_card_clickable .overlapping_area,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .msbdsb_feed_card_clickable .overlapping_area>li,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .msbdsb_feed_card_clickable .msbdsb_feed_card_content{border-radius:8px}.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .msbdsb_feed_item,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .msbdsb_feed_item{border-radius:8px}.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .dsb-carousel__button .dsb-carousel__prev-arrow svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .dsb-carousel__button .dsb-carousel__next-arrow svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .dsb-carousel__button .dsb-carousel__prev-arrow svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .dsb-carousel__button .dsb-carousel__next-arrow svg{fill:WindowText !important}.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .dsb-carousel__button .dsb-carousel__prev-arrow:hover svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .dsb-carousel__button .dsb-carousel__next-arrow:hover svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .dsb-carousel__button .dsb-carousel__prev-arrow:hover svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .dsb-carousel__button .dsb-carousel__next-arrow:hover svg{fill:HighlightText !important}}@media screen and (forced-colors:active){#msb_dsb_root .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero{border-color:LinkText}#msb_dsb_root .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero .hero-focus-overlay,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero .hero-focus-overlay{border-color:Highlight}#msb_dsb_root .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero:hover,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero:hover{background:Highlight}#msb_dsb_root .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero:hover .msbdsb-file-hero-name,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero:hover .msbdsb-file-hero-name{background:Highlight !important;color:#000 !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero:hover .msbdsb-file-hero-tidbit,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero:hover .msbdsb-file-hero-tidbit{background:Highlight !important;color:#000 !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-hero-section .msbdsb-hero-footer .msbdsb-hero-footer-content *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-hero-section .msbdsb-hero-footer .msbdsb-hero-footer-content *{background:transparent;-ms-high-contrast-adjust:none}#msb_dsb_root .msbdsb-mp-content .msb_dsb_people_search,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_people_search{background:Canvas !important}#msb_dsb_root .msbdsb-mp-content .msb_dsb_people_search .msb_dsb_search_box::-ms-input-placeholder,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_people_search .msb_dsb_search_box::-ms-input-placeholder{color:CanvasText;background-color:Canvas !important}#msb_dsb_root .msbdsb-mp-content .msb_dsb_people_search .msb_dsb_search_box,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_people_search .msb_dsb_search_box{background:Canvas !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl{background:Canvas !important;border:1px solid CanvasText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .dsb-svg,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-direct-report-svg,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .dsb-svg,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-direct-report-svg{stroke:CanvasText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .dsb-hero-circle,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .dsb-hero-circle{border-color:LinkText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .dsb-hero-circle div,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .dsb-hero-circle div{border-radius:50%}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .dsb-hero-circle div .people_requery_link,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .dsb-hero-circle div .people_requery_link{border:none}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .dsb-hero-circle div .people_requery_link.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .dsb-hero-circle div .people_requery_link.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-persona,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-persona{border:none}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-persona .extra-people-container:hover,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-persona .extra-people-container:hover{border:none}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-persona .extra-people-container.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-persona .extra-people-container.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle{border:1px solid LinkText;border-radius:4px;outline:none}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link .msbdsb_person_initials,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle .msbdsb_person_initials,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link .msbdsb_person_initials,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle .msbdsb_person_initials{color:CanvasText;background:Canvas}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle .msbdsb_person_initials .msbdsb_person_icon_fallback{fill:CanvasText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link:hover,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle:hover,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link:hover,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle:hover{background:Highlight;color:HighlightText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link:hover *,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle:hover *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link:hover *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle:hover *{background:transparent;color:HighlightText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link:hover .msbdsb_person_initials,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle:hover .msbdsb_person_initials,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link:hover .msbdsb_person_initials,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle:hover .msbdsb_person_initials{color:CanvasText;background:Canvas}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link:hover .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle:hover .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link:hover .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle:hover .msbdsb_person_initials .msbdsb_person_icon_fallback{fill:CanvasText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link.msbdsb_keyboard_selected:focus,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;box-shadow:0 0 0 1px Highlight}#msb_dsb_root .msbdsb-mp-content .peopleIcon,#msb_dsb_brtop .msbdsb-mp-content .peopleIcon{border:1px solid CanvasText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_edu_card .msb_dsb_edu_card_item,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_edu_card .msb_dsb_edu_card_item{border:1px solid LinkText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_edu_card .msb_dsb_edu_card_item.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_edu_card .msb_dsb_edu_card_item.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb-mp-content .msb_dsb_edu_card .msb_dsb_edu_card_item:hover,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_edu_card .msb_dsb_edu_card_item:hover{background:Highlight;color:HighlightText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_edu_card .msb_dsb_edu_card_item:hover *,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_edu_card .msb_dsb_edu_card_item:hover *{background:transparent;color:HighlightText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}body[dir] #msb_dsb_root .msbdsb-mp-content .msb_dsb_top_collaborators,body[dir] #msb_dsb_brtop .msbdsb-mp-content .msb_dsb_top_collaborators{padding:0}#msb_dsb_root .msbdsb-mp-content .msb_dsb_top_collaborators .people_requery_link,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_top_collaborators .people_requery_link{overflow:hidden}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl.msbdsb_people_explanations .msb_dsb_top_collaborators,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl.msbdsb_people_explanations .msb_dsb_top_collaborators{border:none}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization{border:1px solid CanvasText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link,#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle{border-radius:50%;width:32px;height:32px}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link .peopleIcon,#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle .peopleIcon,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link .peopleIcon,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle .peopleIcon{border:none;width:100%;height:100%}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link .peopleIcon .msbdsb_person_initials,#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle .peopleIcon .msbdsb_person_initials,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link .peopleIcon .msbdsb_person_initials,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle .peopleIcon .msbdsb_person_initials{color:CanvasText;background:Canvas}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link .peopleIcon .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle .peopleIcon .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link .peopleIcon .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle .peopleIcon .msbdsb_person_initials .msbdsb_person_icon_fallback{fill:CanvasText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle{color:LinkText;background:Canvas}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle:hover *,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle:hover *{background:transparent;color:Canvas;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization.msb_dsb_independent_orgchart,#msb_dsb_root .msbdsb-mp-content .msbdsb_search_suggestions_card,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization.msb_dsb_independent_orgchart,#msb_dsb_brtop .msbdsb-mp-content .msbdsb_search_suggestions_card{background:Canvas !important}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title{border-radius:6px 6px 0 0;border-bottom:1px solid CanvasText;border:1px solid LinkText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title *,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title *{color:CanvasText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title:hover,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title:hover{background-color:Highlight}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title:hover *,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title:hover *{background:transparent;color:HighlightText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;border-bottom:1px solid transparent}#msb_dsb_root .msbdsb-mp-content .dsb-label,#msb_dsb_brtop .msbdsb-mp-content .dsb-label{color:CanvasText !important}#msb_dsb_root .msbdsb-mp-content .dsb-hero-row,#msb_dsb_brtop .msbdsb-mp-content .dsb-hero-row{-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important;background:transparent}#msb_dsb_root .msbdsb-mp-content .dsb-hero-row .msb-dsb-tooltip.leftAdjust,#msb_dsb_brtop .msbdsb-mp-content .dsb-hero-row .msb-dsb-tooltip.leftAdjust{background:transparent}#msb_dsb_root .msbdsb-mp-content .msb-dsb-tooltip.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msb-dsb-tooltip.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text{border:1px solid CanvasText !important;color:CanvasText !important;background:Canvas !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text::after{border-color:CanvasText transparent transparent transparent !important}#msb_dsb_root .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text .msb-dsb-tooltip-lines{color:CanvasText !important;background:Canvas !important}#msb_dsb_root .msbdsb-mp-content .info-icon-tooltip-base .info-icon-tooltip,#msb_dsb_brtop .msbdsb-mp-content .info-icon-tooltip-base .info-icon-tooltip{border:1px solid CanvasText !important;color:CanvasText !important;background:Canvas !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .info-icon-tooltip-base::before,#msb_dsb_brtop .msbdsb-mp-content .info-icon-tooltip-base::before{border-color:CanvasText transparent transparent transparent}#msb_dsb_root .msbdsb-mp-content .info-icon-tooltip-base.msbdsb_keyboard_selected:focus .info_icon,#msb_dsb_brtop .msbdsb-mp-content .info-icon-tooltip-base.msbdsb_keyboard_selected:focus .info_icon{box-shadow:0 0 0 2px Highlight}#msb_dsb_root .msbdsb-mp-content .dismiss_button,#msb_dsb_brtop .msbdsb-mp-content .dismiss_button{background:transparent}#msb_dsb_root .msbdsb-mp-content .dismiss_button div.cancel_icon>svg,#msb_dsb_brtop .msbdsb-mp-content .dismiss_button div.cancel_icon>svg{fill:LinkText !important}#msb_dsb_root .msbdsb-mp-content .dismiss_button:hover,#msb_dsb_brtop .msbdsb-mp-content .dismiss_button:hover{background:Highlight}#msb_dsb_root .msbdsb-mp-content .dismiss_button:hover div.cancel_icon>svg,#msb_dsb_brtop .msbdsb-mp-content .dismiss_button:hover div.cancel_icon>svg{fill:HighlightText !important}#msb_dsb_root .msbdsb-mp-content div.msbdsb_fluent_icon:not(.msbdsb_pagination_flipper_left_icon,.msbdsb_pagination_flipper_right_icon)>svg>path,#msb_dsb_brtop .msbdsb-mp-content div.msbdsb_fluent_icon:not(.msbdsb_pagination_flipper_left_icon,.msbdsb_pagination_flipper_right_icon)>svg>path{fill:CanvasText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card{background:Canvas !important;border:1px solid CanvasText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item{border:1px solid LinkText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item:hover,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item:hover{background:Highlight;color:HighlightText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item:hover *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item:hover *{background:transparent;color:HighlightText !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card{background:Canvas !important;border:1px solid CanvasText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .chat-message-mentioned-name,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .chat-message-link,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .email-message-mentioned-name,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .email-message-link,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .chat-message-mentioned-name,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .chat-message-link,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .email-message-mentioned-name,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .email-message-link{color:CanvasText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .overlapping_area,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .overlapping_area>li,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .msbdsb_feed_card_content,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .overlapping_area,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .overlapping_area>li,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .msbdsb_feed_card_content{border-radius:4px}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable:hover div.msbdsb_fluent_icon>svg,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable:hover div.msbdsb_fluent_icon>svg{fill:HighlightText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview{border:1px solid HighlightText;border-radius:4px}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview *{background:Highlight}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_preview_icon,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_preview_icon{background-color:Canvas}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body .feed_item_content,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body .feed_item_footer,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body .feed_item_content,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body .feed_item_footer,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body *{color:HighlightText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_person_initials,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_person_initials{color:CanvasText;background:Canvas}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_person_initials .msbdsb_person_icon_fallback{fill:CanvasText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item .sender_location_icon,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item .sender_location_icon{background:CanvasText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item .feed_item_footer,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item .feed_item_footer{color:CanvasText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_content.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_content.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;border-radius:4px}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_footer,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_footer{background-color:transparent !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb-peoplehighlights-feed .msbdsb-peoplehighlights-feed-item:hover,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb-peoplehighlights-feed .msbdsb-peoplehighlights-feed-item:hover{background:Highlight !important;color:HighlightText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb-peoplehighlights-feed .msbdsb-peoplehighlights-feed-item:hover *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb-peoplehighlights-feed .msbdsb-peoplehighlights-feed-item:hover *{background:transparent;color:HighlightText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .suggested_entity:hover .entity_title,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .suggested_entity:hover .entity_subtitle,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .suggested_entity:hover .entity_title,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .suggested_entity:hover .entity_subtitle{color:HighlightText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_divider,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_divider{border:.5px solid rgba(255,255,255,.0837)}#msb_dsb_root .msbdsb-mp-content .chat_suggestion,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion{border:1px solid LinkText}#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bce.msbdsb_keyboard_selected:focus,#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bcb.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bce.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bcb.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;box-shadow:0 0 0 1px Highlight}#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bce:hover,#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bcb:hover,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bce:hover,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bcb:hover{background:Highlight !important;color:CanvasText !important}#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bce:hover *,#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bcb:hover *,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bce:hover *,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bcb:hover *{background:transparent;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_selectable,#msb_dsb_brtop .msbdsb_selectable{border:1px solid LinkText;background:Canvas !important}#msb_dsb_root .msbdsb_selectable:hover,#msb_dsb_brtop .msbdsb_selectable:hover{background:Highlight !important}#msb_dsb_root .msbdsb_selectable:hover *,#msb_dsb_brtop .msbdsb_selectable:hover *{background:transparent;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_selectable:hover .msbdsb_nested_button *,#msb_dsb_brtop .msbdsb_selectable:hover .msbdsb_nested_button *{color:CanvasText !important}#msb_dsb_root .msbdsb_selectable:hover .msbdsb-file-hero-name,#msb_dsb_root .msbdsb_selectable:hover .msbdsb-file-hero-tidbit,#msb_dsb_brtop .msbdsb_selectable:hover .msbdsb-file-hero-name,#msb_dsb_brtop .msbdsb_selectable:hover .msbdsb-file-hero-tidbit{color:HighlightText !important}#msb_dsb_root .msbdsb_selectable .msbdsb_nested_button,#msb_dsb_brtop .msbdsb_selectable .msbdsb_nested_button{border:1px solid LinkText;background:Canvas !important}#msb_dsb_root .msbdsb_selectable .msbdsb_nested_button:hover,#msb_dsb_brtop .msbdsb_selectable .msbdsb_nested_button:hover{background:Highlight !important}#msb_dsb_root .msbdsb_selectable .msbdsb_nested_button.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_selectable .msbdsb_nested_button.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;box-shadow:0 0 0 1px Highlight}#msb_dsb_root .msbdsb_hyperlink,#msb_dsb_brtop .msbdsb_hyperlink{color:LinkText}#msb_dsb_root .msbdsb_hyperlink:hover,#msb_dsb_brtop .msbdsb_hyperlink:hover{text-decoration:underline}#msb_dsb_root .msbdsb_hyperlink.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_hyperlink.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;outline:none !important;border-radius:4px}body[dir] #msb_dsb_root .msbdsb_hyperlink.msbdsb_keyboard_selected:focus,body[dir] #msb_dsb_brtop .msbdsb_hyperlink.msbdsb_keyboard_selected:focus{margin:1px}#msb_dsb_root .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_circle,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_circle{-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_circle .status_icon,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_circle .status_icon{-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_profile .meeting_attendee_icon_container,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_profile .meeting_attendee_icon_container{border:1px solid transparent}#msb_dsb_root .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_profile .meeting_attendee_icon_container.meeting_organizer,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_profile .meeting_attendee_icon_container.meeting_organizer{border-color:Highlight}#msb_dsb_root .msbdsb_meeting_card .suggested_entity,#msb_dsb_brtop .msbdsb_meeting_card .suggested_entity{border:1px solid LinkText !important}#msb_dsb_root .msbdsb_meeting_card:hover .coloured_bar,#msb_dsb_brtop .msbdsb_meeting_card:hover .coloured_bar{background:CanvasText !important}#msb_dsb_root .msbdsb_meeting_card:hover .suggestion_header,#msb_dsb_root .msbdsb_meeting_card:hover *,#msb_dsb_brtop .msbdsb_meeting_card:hover .suggestion_header,#msb_dsb_brtop .msbdsb_meeting_card:hover *{color:HighlightText}#msb_dsb_root .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container,#msb_dsb_brtop .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container{background:Canvas}#msb_dsb_root .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container .more_icon,#msb_dsb_brtop .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container .more_icon{border-color:LinkText}#msb_dsb_root .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container:hover,#msb_dsb_brtop .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container:hover{border-color:Highlight !important}#msb_dsb_root .msbdsb_meeting_card .msbdsb_person_initials,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_person_initials{color:CanvasText;background:Canvas}#msb_dsb_root .msbdsb_meeting_card .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_person_initials .msbdsb_person_icon_fallback{fill:CanvasText}#msb_dsb_root .msbdsb_meeting_card .coloured_bar,#msb_dsb_brtop .msbdsb_meeting_card .coloured_bar{background:CanvasText}#msb_dsb_root .msbdsb_meeting_card .more_files_count,#msb_dsb_root .msbdsb_meeting_card .more_icon,#msb_dsb_brtop .msbdsb_meeting_card .more_files_count,#msb_dsb_brtop .msbdsb_meeting_card .more_icon{color:LinkText !important}#msb_dsb_root .msbdsb_meeting_card .more_files_count:hover,#msb_dsb_root .msbdsb_meeting_card .more_icon:hover,#msb_dsb_brtop .msbdsb_meeting_card .more_files_count:hover,#msb_dsb_brtop .msbdsb_meeting_card .more_icon:hover{color:HighlightText !important}#msb_dsb_root .msbdsb_meeting_card .more_files_count:hover *,#msb_dsb_root .msbdsb_meeting_card .more_icon:hover *,#msb_dsb_brtop .msbdsb_meeting_card .more_files_count:hover *,#msb_dsb_brtop .msbdsb_meeting_card .more_icon:hover *{color:HighlightText !important}#msb_dsb_root .msbdsb_meeting_card .more_files_count.msbdsb_keyboard_selected:focus,#msb_dsb_root .msbdsb_meeting_card .more_icon.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_meeting_card .more_files_count.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_meeting_card .more_icon.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb_meeting_card .suggested_entity:hover .entity_title,#msb_dsb_root .msbdsb_meeting_card .suggested_entity:hover .entity_subtitle,#msb_dsb_brtop .msbdsb_meeting_card .suggested_entity:hover .entity_title,#msb_dsb_brtop .msbdsb_meeting_card .suggested_entity:hover .entity_subtitle{color:HighlightText !important}#msb_dsb_root .info-icon-tooltip-base .info-icon-tooltip,#msb_dsb_brtop .info-icon-tooltip-base .info-icon-tooltip{border:1px solid CanvasText !important;color:CanvasText !important;background:Canvas !important}#msb_dsb_root .info-icon-tooltip-base .info-icon-tooltip::after,#msb_dsb_brtop .info-icon-tooltip-base .info-icon-tooltip::after{border-color:CanvasText transparent transparent transparent !important}#msb_dsb_root .msbdsb_learning_card .learning_card_suggestions_container,#msb_dsb_brtop .msbdsb_learning_card .learning_card_suggestions_container{background:transparent}#msb_dsb_root .msbdsb_search_suggestions_card,#msb_dsb_brtop .msbdsb_search_suggestions_card{border:1px solid CanvasText}#msb_dsb_root .msbdsb_feed_card:hover .msbdsb_suggestion_pill,#msb_dsb_brtop .msbdsb_feed_card:hover .msbdsb_suggestion_pill{background:Canvas !important;border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb_feed_card:hover .msbdsb_suggestion_pill .msbdsb_suggestion_contents,#msb_dsb_brtop .msbdsb_feed_card:hover .msbdsb_suggestion_pill .msbdsb_suggestion_contents{color:CanvasText !important;fill:CanvasText !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover{background:Highlight !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover *,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover *{background:transparent !important;color:HighlightText !important;fill:HighlightText !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text{border:1px solid CanvasText !important;color:CanvasText !important;background:Canvas !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after{border-color:CanvasText transparent transparent transparent !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines{color:CanvasText !important;background:Canvas !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover{background:Highlight !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover *,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover *,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover *,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover *{background:transparent !important;color:HighlightText !important;fill:HighlightText !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text{border:1px solid CanvasText !important;color:CanvasText !important;background:Canvas !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after{border-color:CanvasText transparent transparent transparent !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines{color:CanvasText !important;background:Canvas !important}#msb_dsb_root .msbdsb_suggestion_pill,#msb_dsb_brtop .msbdsb_suggestion_pill{background:Canvas !important;border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb_suggestion_pill .msbdsb_suggestion_contents,#msb_dsb_brtop .msbdsb_suggestion_pill .msbdsb_suggestion_contents{color:CanvasText !important;fill:CanvasText !important}#msb_dsb_root .msbdsb_suggestion_pill.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_suggestion_pill.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msb_dsb_pagination_flipper,#msb_dsb_brtop .msb_dsb_pagination_flipper{border:1px solid LinkText}#msb_dsb_root .msb_dsb_pagination_flipper.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msb_dsb_pagination_flipper.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msb_dsb_pagination_flipper *,#msb_dsb_brtop .msb_dsb_pagination_flipper *{background-color:transparent !important}#msb_dsb_root .msb_dsb_pagination_flipper:hover,#msb_dsb_brtop .msb_dsb_pagination_flipper:hover{background-color:Highlight !important}#msb_dsb_root .msb_dsb_pagination_flipper:hover *,#msb_dsb_brtop .msb_dsb_pagination_flipper:hover *{fill:Canvas !important}#msb_dsb_root .msb_dsb_pagination_dot,#msb_dsb_brtop .msb_dsb_pagination_dot{background-color:CanvasText !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card{background-color:Canvas !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top{background:Canvas !important;border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top .msbdsb_suggestion_contents,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top .msbdsb_suggestion_contents{color:CanvasText !important;fill:CanvasText !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover{background:Highlight !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover *,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover *{background:transparent !important;color:HighlightText !important;fill:HighlightText !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text{border:1px solid CanvasText !important;color:CanvasText !important;background:Canvas !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text::after{border-color:CanvasText transparent transparent transparent !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines{color:CanvasText !important;background:Canvas !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msb-dsb-feedback-tooltip .feedback-button,#msb_dsb_brtop .msb-dsb-feedback-tooltip .feedback-button{border:1px solid LinkText}#msb_dsb_root .msb-dsb-feedback-tooltip .feedback-button:hover,#msb_dsb_brtop .msb-dsb-feedback-tooltip .feedback-button:hover{background:Highlight !important}#msb_dsb_root .msb-dsb-feedback-tooltip .feedback-button:hover *,#msb_dsb_brtop .msb-dsb-feedback-tooltip .feedback-button:hover *{background:transparent;color:HighlightText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msb-dsb-feedback-tooltip .feedback-button.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msb-dsb-feedback-tooltip .feedback-button.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card{color:CanvasText !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background{background:Canvas !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body .feed_item_content,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body .feed_item_footer,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body *,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body .feed_item_content,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body .feed_item_footer,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body *{color:CanvasText !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable{border:1px solid transparent;border-radius:0 !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .overlapping_area,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .overlapping_area>li,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .msbdsb_feed_card_content,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .overlapping_area,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .overlapping_area>li,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .msbdsb_feed_card_content{border-radius:0 !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable.msbdsb_keyboard_selected:focus{border-radius:0 !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover{color:HighlightText !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .chat-message-mentioned-name,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .chat-message-link,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .email-message-mentioned-name,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .email-message-link,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .chat-message-mentioned-name,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .chat-message-link,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .email-message-mentioned-name,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .email-message-link{color:HighlightText !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .msbdsb_feed_item_title div.msbdsb_tidbit_icon>svg,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .msbdsb_feed_item_title div.msbdsb_tidbit_icon>svg{fill:HighlightText !important}#msb_dsb_root .carousel-container .dsb-carousel__button,#msb_dsb_brtop .carousel-container .dsb-carousel__button{background-color:Canvas;box-shadow:inset 0 0 0 2px LinkText}#msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{width:0;height:0;border-radius:6px;border-bottom:6px solid rgba(0,0,0,.3);transform:rotate(-90deg)}body[dir='ltr'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,body[dir='ltr'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{border-left:6px solid transparent;border-right:6px solid transparent}body[dir='rtl'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,body[dir='rtl'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{border-right:6px solid transparent;border-left:6px solid transparent}.zeroInput19H1.darkTheme #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,.zeroInput19H1.darkTheme #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{border-bottom-color:rgba(255,255,255,.6)}body[dir='rtl'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,body[dir='rtl'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{transform:rotate(90deg)}#msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{width:0;height:0;border-radius:6px;border-bottom:6px solid rgba(0,0,0,.3);transform:rotate(90deg)}body[dir='ltr'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,body[dir='ltr'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{border-left:6px solid transparent;border-right:6px solid transparent}body[dir='rtl'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,body[dir='rtl'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{border-right:6px solid transparent;border-left:6px solid transparent}.zeroInput19H1.darkTheme #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,.zeroInput19H1.darkTheme #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{border-bottom-color:rgba(255,255,255,.6)}body[dir='rtl'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,body[dir='rtl'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{transform:rotate(-90deg)}#msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,#msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{border-bottom-color:CanvasText !important}#msb_dsb_root .carousel-container .dsb-carousel__button:hover,#msb_dsb_brtop .carousel-container .dsb-carousel__button:hover{background-color:Highlight}#msb_dsb_root .carousel-container .dsb-carousel__button:hover .dsb-carousel__prev-arrow,#msb_dsb_root .carousel-container .dsb-carousel__button:hover .dsb-carousel__next-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button:hover .dsb-carousel__prev-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button:hover .dsb-carousel__next-arrow{border-bottom-color:HighlightText !important}.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .msbdsb_feed_card_clickable .overlapping_area,.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .msbdsb_feed_card_clickable .overlapping_area>li,.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .msbdsb_feed_card_clickable .msbdsb_feed_card_content,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .msbdsb_feed_card_clickable .overlapping_area,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .msbdsb_feed_card_clickable .overlapping_area>li,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .msbdsb_feed_card_clickable .msbdsb_feed_card_content{border-radius:8px}.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .msbdsb_feed_item,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .msbdsb_feed_item{border-radius:8px}.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .dsb-carousel__button .dsb-carousel__prev-arrow svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .dsb-carousel__button .dsb-carousel__next-arrow svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .dsb-carousel__button .dsb-carousel__prev-arrow svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .dsb-carousel__button .dsb-carousel__next-arrow svg{fill:CanvasText !important}.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .dsb-carousel__button .dsb-carousel__prev-arrow:hover svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .dsb-carousel__button .dsb-carousel__next-arrow:hover svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .dsb-carousel__button .dsb-carousel__prev-arrow:hover svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .dsb-carousel__button .dsb-carousel__next-arrow:hover svg{fill:HighlightText !important}}z{a:1}z{a:1}z{a:1}z{a:1}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            MZ       ÿÿ  ¸       @                                   €   º ´	Í!¸LÍ!This program cannot be run in DOS mode.
$       PE  L ˆ›sf        à   v   
      ¾•            @                       à     ¦  @…                           h•  S                   ‚  ğR   À                                                                       H           .text   Äu       v                    `.rsrc              x              @  @.reloc      À      €              @  B                 •      H     \\  ä6       @“  (                                          0        %(a  
}  }  *   0        {  * 0        {  * 0 X        ·
++P W½G W½G·şE   R      R    ·9    E	      D   ®ÿÿÿ    R   ¡   ‹   r   b   r  p(  
,Z     ·
+›+M    ·
+(	  o  -z+ ·&+·+ù     ·
8lÿÿÿ+    ·
8^ÿÿÿ,Á    ·
8Nÿÿÿ+)**    ·
8>ÿÿÿ,¢·+·+ ,     ·
8%ÿÿÿ+¹š€
      ·
8ÿÿÿ8qÿÿÿ(  (  (  
(  
(  
o  
€  
rA  p(  
&~  (  
&rM  p(  
&s=  (  
(  
*0 m    ·E       +#E   8   &   È   ³     ù   x   #(  
(  
r]  p(  
(  

    ·+·(  
,O     ·+¥8   	(  
 §öq §öq·şE             ·9        ·8eÿÿÿ8~   r“  p(  
(   
%(  
(   
(   
(  
    ·8*ÿÿÿ	(  
,@    ·8ÿÿÿ8pÿÿÿs!  
r·  prÅ  prå  po"  
€      ·8äşÿÿ+‚~  (#  
&    ·8ÉşÿÿŞo$  
(%  
Ş + ·&+·+ù ·+·+ , *   A          J  J     '  0 ê     +E   ­   A      /   (  
(   
rí  p(  

    ·+Ì(&  
-    ·+»+ ('  
&    ·+©+  ºŞ ºŞ·şE   ‡ÿÿÿ   ‡ÿÿÿ ·9        ((  
()  
&r÷  p~*  
r p(+  
~  (  
(,  
     ·8=ÿÿÿŞo$  
(%  
Ş + ·&+·+ù ·+·+ , *        ÇÇ '  0 c       + ·&+·+ù (.  
,= £På[ £På[·şE   Îÿÿÿ   Îÿÿÿ ·9    ·+·+ , + r# p(%  
*€
  (	  o  * 0        (/  
*0 º        ·++2E   ö   (  \      p   u  «   Ìÿÿÿâ     …   ~  :m      ·+»·+·+ , 8    €   (0  
(1  
ŞU&ŞRrW p~
  (2  
(  

    ·8rÿÿÿ(  
,&    ·8^ÿÿÿ+°('  
& 
   ·8Iÿÿÿ8Œ   s  €  (  o      ·8#ÿÿÿ8Ç   #(  
(  
(  
rƒ p(  
r“ p(  

    ·8ìşÿÿ(&  
-,     ·8Øşÿÿ8wÿÿÿrM  p€
   	   ·8½şÿÿ8"ÿÿÿ(%  
    ·8¦şÿÿ~
  (.  
9ÿÿÿ È§	 È§	·şE   Áÿÿÿ   Áÿÿÿ+ ·&+·+ù  ·9        ·8Yşÿÿ+„~  *      _ r   0 C        £“. £“.·şE               ·9    ·+·+ , + ·&+·+ù {  * 0 P        )
ˆ, )
ˆ,·şE               ·+·+ , ·9    + ·&+·+ù }  {  (  *0 C        ?µ®o ?µ®o·şE               ·+·+ , ·9    + ·&+·+ù {  * 0 D        ä5w ä5w·şE               ·+·+ , ·9    + ·&+·+ù }  *0 C        ™Y ™Y·şE               ·+·+ , ·9    + ·&+·+ù {  * 0 D        }ÈR }ÈR·şE               ·+·+ , ·9    + ·&+·+ù }  *0 R        P¨Er P¨Er·şE               ·9    ·+·+ , + ·&+·+ù ~  r¡ pr» po3  
*  0 R        ’¥… ’¥…·şE               ·+·+ , ·9    + ·&+·+ù ~  r¡ pr» po4  
*  0 R        šMr šMr·şE               ·+·+ , ·9    + ·&+·+ù ~  r¡ prÍ po3  
*  0 R        şæc şæc·şE               ·+·+ , ·9    + ·&+·+ù ~  r¡ prÍ po4  
*  0 V        Ñ4ät Ñ4ät·şE               ·+·+ , ·9    + ·&+·+ù ~  r¡ pr÷ p~5  
o6  
*  0 R        Š( Š(·şE               ·+·+ , ·9    + ·&+·+ù ~  r¡ pr÷ po7  
*  0 Ê      {é
 {é
·şE   a      a    ·9    ·+·+ , +E   U   @   4      r p(%  
    ·
+×(	  o  ,+ ·&+·+ù     ·
+¶+!*    ·
+ª(	  o  -     ·
+•+ß*rM p(%  
(  
(   
r p(  
~
  (8  
&*  0 %    ·

E       8  
E?   3         5  À  €  ”  ¸    ”  #  b  7  Ç  °  >  Z  a   F  	       Ù  Q  s   !  #  …   ¦  !  9  —   '  l  }  ü  \  M  Z  Ş  ­  €  ô  Ì    O       q  ñ  “  Ô  ;    ğ  L  |  ¦  û  c  3  ì  r» p(%  
    ·
8æşÿÿ(	  o  9       ·
8Êşÿÿ8¡  rõ p(%  
 .   ·
8®şÿÿİ­      ·
8œşÿÿ+$
    ·
8Šşÿÿ8Á       ·
8xşÿÿ+      ·
8fşÿÿ8ı  o9  
o:  
&İ=      ·
++
E   !   ëÿÿÿ   ,    ·
+ß+ o;  
     ·
+Ì+ Üs=  	    ·
8ôıÿÿ8C  ş    ·
8Üıÿÿ8ç   =   ·
8Êıÿÿ8Ê      ·
8·ıÿÿ@&   '   ·
8£ıÿÿ8š  ~  o<  
o-   #   ·
8€ıÿÿ9(      ·
8mıÿÿ+3~  o<  
o-      ·
8Mıÿÿ,†    ·
8=ıÿÿ8Ÿşÿÿ
 4   ·
8)ıÿÿ8Ò  rS p(%  
 7   ·
8ıÿÿİ  r³ p(%  
(	  (=  
o  
    ·
8Üüÿÿ~  o>  
9z      ·
8¿üÿÿ8ÿÿÿró p(%  
    ·
8£üÿÿİ¢   "   ·
8‘üÿÿ,Ô 9   ·
8üÿÿ8•   /   ·
8oüÿÿ·+·+ , ;†şÿÿ )   ·
8Püÿÿ8D  (	  o  r+ p(?  
(%  
rS p~  Œ+  (2  
(%  
 +   ·
8	üÿÿİ  s?   	   ·
8ïûÿÿ8‰ıÿÿ    ·
8Úûÿÿ8q      ·
8Èûÿÿ~  :ı   8   ·
8±ûÿÿ8çüÿÿ	o9  
	o:  
&İˆ      ·
++
E   !   ëÿÿÿ   	,E    ·
+ß+ 	o;  
     ·
+Ì oÆ oÆ·şE   Áÿÿÿ   Áÿÿÿ ·9    + Ü(	  o   >   ·
8ûÿÿ;ÿÿÿ 6   ·
8üúÿÿ+L    ·
8ìúÿÿ8÷       ·
8Úúÿÿ~  @    5   ·
8Âúÿÿ8   &   ·
8°úÿÿ+J %   ·
8¡úÿÿ;"   1   ·
8Œúÿÿ+Í    ·
8}úÿÿ@nüÿÿ 
   ·
8iúÿÿ8g   :   ·
8WúÿÿYE   Ë  ÇıÿÿTüÿÿ    ·
86úÿÿ8N      ·
8$úÿÿ~  @ıÿÿ 2   ·
8úÿÿ8Û       ·
8úùÿÿş8öşÿÿ    ·
8ãùÿÿ~  o>  
9üÿÿ    ·
8Æùÿÿ8Vüÿÿ(=  
(	  o  (@  
    ·
8›ùÿÿ(A  
~  lA¸    0   ·
8|ùÿÿ8,ıÿÿ 3   ·
8jùÿÿ:ßúÿÿ    ·
8Wùÿÿ8©úÿÿ    ·
8Eùÿÿ@Nÿÿÿ ,   ·
81ùÿÿ8ÿıÿÿ (   ·
8ùÿÿ(	  o  ;üÿÿ ;   ·
8ùÿÿ8Cüÿÿs>   -   ·
8èøÿÿ8    !   ·
8Öøÿÿ8áşÿÿ    ·
8Äøÿÿ~  @Òıÿÿ    ·
8¬øÿÿ8	üÿÿ <   ·
8šøÿÿ(	  o  @Ğûÿÿ *   ·
8}øÿÿ8Gşÿÿ    ·
8iøÿÿ8tşÿÿo9  
o:  
&ŞC     ·
++
E   ëÿÿÿ   !   ,    ·
+ß+ o;  
    ·
+Ì+ Ü $   ·
8øÿÿŞ&Ş + ·&+·+ù *   Ad     ³     É  C          h     ~  i          °     Ã  C                        0 †          ·
++E   ìÿÿÿ   a   ~  -\    ·
+Ş·+·+ , +  …ö,A …ö,A·şE   Öÿÿÿ   Öÿÿÿ + ·&+·+ù ·9    s  €      ·
++ ~  *  0 a       ·+·+ ,  æ×_ æ×_·şE            + ·&+·+ù  ·9    {  ,+ *}  ş  sC  
(D  
&*   0 *    ·E       +wE   6  t   $  ğ  ½   š  –  /    T  j    a   Ğ   ¬  f  O   /   Œ      Ç  ¤   „  ë   l  ~  º  I  sE  
€  s  
    ·8lÿÿÿ8ª      ·8Zÿÿÿ~  o+  o>  
-O    ·8:ÿÿÿ8k      ·8(ÿÿÿ8ç      ·8ÿÿÿo  9      ·8ışÿÿ8«   X    ·8åşÿÿ8°   }      ·8Ìşÿÿ9À       ·8¹şÿÿ+•o-  €      ·8şÿÿ82ÿÿÿr‹ p~  oF  
oG  
(H  
(  
(%  
    ·8eşÿÿ8n       ·8Sşÿÿ8  o   	   ·85şÿÿ8        ·8#şÿÿi?Ù       ·8şÿÿ8mÿÿÿr± p(%  
    ·8ïıÿÿ8ø      ·8İıÿÿo+  a@;      ·8Âıÿÿ8½   rÍ p(%  
r p~
  (  
{  (  (%  
sI  
%r poJ  
&%oJ  
&%r' poJ  
&oK  
(  +
İzşÿÿr+ p	o$  
(  
(%  
İ_şÿÿš+ ·&+·+ù  
   ·8ıÿÿo+  ;şÿÿ    ·8ıÿÿ8™       ·8óüÿÿ·+·+ , o-  ;§ıÿÿ    ·8Ïüÿÿ8jşÿÿo+  Œ+  (M  
~  o+  oN  
    ·8™üÿÿ8œıÿÿ    ·8‡üÿÿo+  b@ıÿÿ    ·8lüÿÿ8°ıÿÿ    ·8Züÿÿo+  ;Uıÿÿ    ·8@üÿÿ8Qşÿÿ€  o/  €      ·8üÿÿ £`Ù` £`Ù`·şE   ıûÿÿ   ıûÿÿ ·9    8^ÿÿÿre p(%  
*      Tc·'  0 ß     (O  
%r¡ poP  
%rå poQ  
%  N  oR  
(S  
oT  

%ijoU  
%oV  
%ioW  
oX  
oY  
tA  %oZ  
%s[  
%o\  
o]  
oX  
o^  
Şrï p	o$  
(  
(%  
Ş ~*  
* æuZ æuZ·şE   Üÿÿÿ   Üÿÿÿ ·+·+ , + ·&+·+ù ·9    *       ƒƒ '  0        rE p}  (B  
*  0 P       + ·&+·+ù ·+·+ ,  ªCSB ªCSB·şE               ·9    €  Z€  €  *0        (B  
* 0 C       + ·&+·+ù  WLb$ WLb$·şE               ·+·+ , ·9    {  * 0 D       + ·&+·+ù  õÇ% õÇ%·şE               ·+·+ , ·9    }  *0        (_  
('  *  0 C        Ct Ct·şE               + ·&+·+ù ·+·+ , ·9    {"  * 0 D       ·+·+ ,  4¦ï 4¦ï·şE              + ·&+·+ù  ·9    }"  *0        (B  
* 0 C       + ·&+·+ù  <½‡$ <½‡$·şE               ·+·+ , ·9    {#  * 0 D       + ·&+·+ù   (z   (z ·şE               ·+·+ , ·9    }#  *0 C       + ·&+·+ù  M'- M'-·şE               ·9    ·+·+ , {$  * 0 D       + ·&+·+ù  È+Æl È+Æl·şE               ·+·+ , ·9    }$  *0 C       + ·&+·+ù  ÍÒ×B ÍÒ×B·şE               ·+·+ , ·9    {%  * 0 D       + ·&+·+ù  5v 5v·şE               ·9    ·+·+ , }%  *0 C       + ·&+·+ù ·+·+ ,  `>ÔU `>ÔU·şE               ·9    {&  * 0 D       + ·&+·+ù  ½ÍÁ" ½ÍÁ"·şE               ·+·+ , ·9    }&  *0        (c  
(<  *   0 ¡       YE   9         +   w   +{+  (5  *{*  (4  *+ ·&+·+ù *{,  (6  *·+·+ ,  ˜J ˜J·şE   ½ÿÿÿ   ½ÿÿÿ ·9    {)  (3  *{-  (7  *   0 –      ¾i ¾i·şE               ·+·+ , + ·&+·+ù ·9    {)  od  
{)  rµ poe  
{*  {+  {,  {-  %od  
%od  
%
od  
od  
(:  *  0 ¤   	   ëÄñ' ëÄñ'·şE               ·9    + ·&+·+ù ·+·+ , {)  {*  %
od  
od  
{)  {*  rµ p%oe  
oe  
{+  {,  {-  %od  
%
od  
od  
(:  *0 ²   
   ‹„o ‹„o·şE               ·+·+ , + ·&+·+ù ·9    {)  {*  {+  %od  
%
od  
od  
{)  {*  {+  rÙ p%oe  
	%oe  
oe  
{,  {-  %
od  
od  
(:  *  0 Ä      	¤âP 	¤âP·şE               ·9    + ·&+·+ù ·+·+ , {)  {*  {+  {,  %od  
%od  
%
od  
od  
{)  {*  {+  {,  rÙ p%oe  
%oe  
%oe  
	oe  
{-  od  
(:  *0 Ø      –x÷T –x÷T·şE               ·+·+ , ·9    + ·&+·+ù {)  {*  {+  {,  {-  %od  
	%od  
%od  
%
od  
od  
{)  {*  {+  {,  {-  rÙ p%oe  
%oe  
%oe  
%oe  
oe  
(:  *0 ˜     +	E      8   E   {'  
     ·+Ş+ (f  
t  |'  (  +
    ·+¶3Ö    ·+©+ + ·&+·+ù  Ú Ú·şE   ¾ÿÿÿ   ¾ÿÿÿ ·9    ·+·+ , *0 ˜     +	E   8   E      {'  
    ·+Ş+ (h  
t  |'  (  +
     ·+¶3Ö    ·+©+ + ·&+·+ù  Ç Ç·şE   ¾ÿÿÿ   ¾ÿÿÿ ·+·+ , ·9    *0 ‡     +E      >   &   ·+·+ , {'  
     ·+Ô,/    ·+È+ s%  o"      ·+°+ ·&+·+ù +  o×“ o×“·şE   ¼ÿÿÿ   ¼ÿÿÿ ·9    * 0 ¬         ·
++E      q   ,   äÿÿÿ]   ·+·+ , ,f     ·
+Ğ+{(  o;  
    ·
+º+E ï{ ï{·şE   '      '    ·9        ·
+‰{(  ,    ·
8uÿÿÿ+¥+ ·&+·+ù (i  
*0        <„Fc <„Fc·şE               ·+·+ , + ·&+·+ù ·9    sj  
})  sj  
}*  sj  
}+  sj  
},  sj  
}-  (k  
{)  ol  
{)  sm  
on  
{)  so  
op  
{)  r÷ poq  
{)  00sr  
os  
{)  rµ poe  
{)  ot  
{)  ş3  su  
ov  
{*  ol  
{*  :sm  
on  
{*  so  
op  
{*  r poq  
{*  00sr  
os  
{*  rµ poe  
{*  ow  
{*  ot  
{*  ş4  su  
ov  
{+  ol  
{+  tsm  
on  
{+  so  
op  
{+  r poq  
{+  00sr  
os  
{+  rÙ poe  
{+  ow  
{+  ot  
{+  ş5  su  
ov  
{,  ol  
{,   ®   sm  
on  
{,  so  
op  
{,  r+ poq  
{,  00sr  
os  
{,  rÙ poe  
{,  ow  
{,  ot  
{,  ş6  su  
ov  
{-  ol  
{-   è   sm  
on  
{-  so  
op  
{-  r= poq  
{-  00sr  
os  
{-  rÙ poe  
{-  ow  
{-  ot  
{-  ş7  su  
ov  
"  ÀB"  ÀBsx  
(y  
(z  
    W  sr  
({  
(|  
{)  o}  
&(|  
{*  o}  
&(|  
{+  o}  
&(|  
{,  o}  
&(|  
{-  o}  
&rO p(q  
   0sr  
(s  
(~  
(  
* 0        (€  
(I  }/  *0        (€  
(I  }/  }0  * 0        (€  
(I  }/  }1  * 0 Ó     +E   ¼   <   ‘   (  
{3  şA  s!  o8  {5  (	  o  o‚  
    ·+²+ ·&+·+ù  SC' SC'·şE   -      -    ·9    ~  o>  
,C·+·+ ,     ·8]ÿÿÿ+ ~  o<  
o-  
{3  o2       ·82ÿÿÿ+ * 0 8    +E   	  A      ×   É   l   o&  }.  {.  
    ·+ÆYE   9   9      ¡   ¡       ·+¡8…   {7  rs pr“ p(ƒ  
o„  
    ·8vÿÿÿ8š   {7  r­ prÛ p(ƒ  
o„  
 Ç> Ç>·şE              + ·&+·+ù  ·9        ·8ÿÿÿ+@    ·8ÿÿÿ+2{7  r÷ pr p(ƒ  
o„  
·+·+ ,      ·8Ùşÿÿ+ {6  o…  
*0 §    ·E       8   E"         h   õ  ˜  g    ¹    1   Û  R  ª  2  ¢  1  Ü   g  Ñ     €    ˜  q  ô   Ã  N  €    ó  Y  J   ª  ¼  (	  o      ·8Yÿÿÿ{/  @ˆ   	   ·8@ÿÿÿ8ç  	(C      ·8'ÿÿÿ8‡  {.  (C      ·8	ÿÿÿ8i  }0       ·8ğşÿÿ(	  o  @      ·8Óşÿÿ8ú   (†  

 ¯è[ ¯è[·şE   Ö     Ö   ·9        ·8•şÿÿ(.  
9À      ·8}şÿÿ8Ï   }0      ·8dşÿÿ8š      ·8Rşÿÿ	9±      ·8?şÿÿ·+·+ , 8õşÿÿr- p(‡  

    ·8şÿÿ(.  
9C      ·8 şÿÿ+m    ·8ñıÿÿ{0  9K      ·8Ùıÿÿ8²şÿÿ     ·8Çıÿÿ{.  <ö       ·8®ıÿÿ8Œ   rO p
 
   ·8–ıÿÿ8Ç  rŸ p
    ·8~ıÿÿ8¯  (	  o  ş}0      ·8Yıÿÿ8   {1      ·8@ıÿÿYE   ´şÿÿ(şÿÿ³ÿÿÿ    ·8ıÿÿ+I(ˆ  
    ·8
ıÿÿşX  o‰  
sŠ  
 Êš;o‹  
  eÍ0!    ·8Ùüÿÿ8¶       ·8Çüÿÿ+     ·8¸üÿÿ{/  9¨       ·8 üÿÿ8şÿÿ{.  (D  ~*  

    ·8|üÿÿ{.  <@şÿÿ    ·8cüÿÿ8ıÿÿ~  {.  o<  
o+  o/  o-  (E      ·8#üÿÿ8¿ıÿÿ}0      ·8
üÿÿ8@ÿÿÿ{.      ·8ñûÿÿ~  {.  o>  
9}ıÿÿ    ·8Ïûÿÿ8lÿÿÿ(Œ  
& !   ·8µûÿÿŞ9r	 p(2  
(%  
Ş${6  o…  
(  
 È   (  
(  
Ü+ ·&+·+ù * A4          a  a     '         v  v  $       0 #    ·E        my my·şE   1      1    ·9    ·+·+ , +E   .   ¹   "      ~
  
    ·+Ù(.  
,    ·+Ç+      ·+»İ‹   rK	 p(2  
~  
r]	 p|.  (H  
ş  	o‘  
s’  
rq	 pr‹	 po“  
r•	 po“  
r­	 p(H  
o“  
~  
rÅ	 prÛ	 po”  
    ·80ÿÿÿŞ&Ş + ·&+·+ù * A                   0 Ó     +E   +   Ÿ          ~
  
    ·+Û(.  
,    ·+Ê+      ·+¿Şws•  
rq	 pr‹	 po–  
r•	 po–  
r­	 p(H  
o–  
rÛ	 p(—  
 dÂ{ dÂ{·şE   •ÿÿÿ   •ÿÿÿ ·9        ·8KÿÿÿŞ&Ş ·+·+ , + ·&+·+ù *       ¹¹   0 n     (ˆ  

 şX  o‰  
sŠ  
 Êš;o‹  
 €–˜ Z04·+·+ ,  Vü=d Vü=d·şE   
      
    ·9    + *+ ·&+·+ù *  0 R        ô] ô]·şE              + ·&+·+ù  ·+·+ , ·9    (	  {5  o˜  
o  *  0 D        ®Õ›r ®Õ›r·şE              + ·&+·+ù  ·9    ·+·+ , (™  
*0 ¬         ·
++ ·&+·+ù +E   7   Øÿÿÿq      "   ,p    ·
+Ú+ {2  o;  
    ·
+Ä·+·+ , +E     ·
+¯ ³¹ãf ³¹ãf·şE   Äÿÿÿ   Äÿÿÿ ·9    {2  ,    ·
8uÿÿÿ+›(š  
*0 ó      + ·&+·+ù  øÀ€ øÀ€·şE               ·9    ·+·+ , s›  
}4  sj  
}5  sœ  
}6  s›  
}7  s1  }3  (  
{4  rõ	 p"  (As  
oŸ  
{4  PPP(   
o¡  
{4  sm  
on  
{4  r
 poq  
{4     sr  
os  
{4  r
 po„  
{4  o¢  
{5  ol  
{5  rõ	 p"  As£  
oŸ  
{5  PPP(   
o¡  
{5   "  sm  
on  
{5  r-
 poq  
{5   —    sr  
os  
{5  ot  
{5  rK
 po„  
{5  şF  su  
 o¤  
{6  	o¥  
{6  ru
 po¦  
{6  o…  
{6   ¤   "  sm  
on  
{6  r‹
 poq  
{6  Z sr  
os  
{6  rŸ
 po„  
{6  şB  su  
 ov  
{7  rõ	 p"  As£  
oŸ  
{7  PPP(   
o¡  
{7   Á   sm  
on  
{7  r­
 poq  
{7     sr  
os  
{7  o¢  
{3   …   nsm  
on  
{3  r»
 poq  
{3     0sr  
os  
{3  ot  
"  ÀB"  ÀBsx  
(§  
(¨  
(©  
oª  
    W  sr  
(«  
(¬  
(­  
(®  
(¯  
{3  o}  
&(¯  
{4  o}  
&(¯  
{5  o}  
&(¯  
{6  o}  
&(¯  
{7  o}  
&(°  
(±  
rß
 p(²  
(³  
(´  
(µ  
(9  
r po¶  
(·  
* 0        (B  
* 0 š         ·
++E   9      ìÿÿÿ~8  -4    ·
+Ş+ r pĞ  (º  
o»  
s¼  
€8       ·
+µ+  ›;R ›;R·şE   §ÿÿÿ   §ÿÿÿ+ ·&+·+ù  ·9    ·+·+ , ~8  *  0 B        Lƒ7 Lƒ7·şE              + ·&+·+ù  ·+·+ , ·9    ~9  *  0 C        Òßxz Òßxz·şE              + ·&+·+ù  ·9    ·+·+ , €9  * 0 B        gÖ†	 gÖ†	·şE              + ·&+·+ù  ·9    ·+·+ , ~:  *  0        (¾  
* 0 Q        	â, 	â,·şE              + ·&+·+ù  ·9    ·+·+ , sO  (¿  
t  €:  *   BSJB         v2.0.50727     l   l  #~  Ø  °  #Strings    ˆ$  `  #US è/     #GUID   ø/  ì  #Blob          W¶		   ú3      r      :   P   @   ¿      3               
                          Ù      * 
  P 
  € n  — n  ´ n  Ó n  ì n  n   n  Z; n; |n   ™ ³™
 º   ¾™ Ã™ Õ™ ß™ óé  é 

 7   R= “g ¦   Ï“ ñ" A0 ti Š= •™ƒ ¡   Í™ åÛ òÛ 9'
 M   S™ |i ŒÛ –Û ¶™& Ë  & Ï   Ó
  üÛ "™ 4i B= O™ X= |= ”™ Ã¨  +ß H   ui* šŠ Ç¼  i -Û Q¼ i¼ ‹Û ˜Û ­™ º™ È™ à™ ñ ñ 'é J™ S vé ³¤ ¹é Ï= ë¤ 	™ )	¤ G	= v	é ²	é ¹	é ñ	™ 
™
 
   
= &
 3
™. >
  . B
   R
ñ l
¤ q
¤ „
¤ ¡
¤ Ó
= ş
= 4= ¤= ÜÄ ói ! F1 R™ W™ {n  ‘ñ ªñ ¿
            %  M   € :  9     >  =    B  9      F  9     J  9     W  A  !   [  A  !    _  A  !   c  E " !   g  I " %    kt9 # (   ˆtQ ' 1    štU . =    ®¸9 8 J   ×¸Y : N  ;›  Q¸ ;› Q€›  ;äQ€› Q€Q› Q€“› Q€ä›  æ›  èV êZ ì¸ ; ›  Q‘ “• ä æ¸ è¸ ù¯'¸V€;VV€VV€QV'¸V€;ZV€ZV€QZ'¸V€;ËV€ËV€QË ;¸ T›  j¸ …¸  ¸ ê 'î 2ó :ó Bó Ló Uó h¸ uË z ˆ¸ 'î ” ¦	 ®ó ½ Ç	 ;  ;7P     †J » t     † ;„  ˆ     † QG œ     ‘ ;Ş  "    ‘ 7  ˜#    ‘ ;7   $    – ;ˆ  %    J 
  $%    – ;^ ü&    †æc L'    †;h ¨'    †n ø'    †;s H(    ƒèG ˜(    ƒ;  è(    ƒ“h	 H)    ƒ; 	 ¨)    ƒäh
 *    ƒ 
 h*    ƒQy Ì*    ƒ; ,+    – ;7  ,    – ;† œ4    –;Ÿ 05    †    5     ;¤ è9     ;© ä:    †J   ;    ‘ò7  `;    †J   t;    †´ Ä;    †º      †J %      Æ/Ï      Æ6Ö      ÆJã <    †J   0<    †;G €<    ;  Ğ<    †J   ä<    †¹„  4=    †Â
  „=    †ËG Ô=    †Ù  $>    †çG t>    †õ  Ä>    †G  ?    †   d?    †J  ! €?    †  ! 0@     äø" Ô@     “ø$ „A     Qø& DB     ø( C     ;ø* øC    †;ÿ, œD    †ÿ- @E    † ; . ÔE    Ä   / ŒF     ; 0  J    †J  0 ÀJ    †J  0 èJ    †J  1 K    Ä Á	2 ğK     ;Ï3 4M     ø5 R      7 hS     ; 8 XT     ;9 ÔT     ;ø< 4U    Ä b
l> „U    Ä   ? <V     ; @ <Z    ƒJ  @ PZ    “$@ øZ    “;*@ H[    “;0@ ˜[    –;;A è[    †J  A ü[    ‘ò7 A    ;   Q   à   à   à   à   à   à   à   à   à   à   î   à   à   î   !   à   î   à   î   à   î   B   F   à   à   à   !   !   !   !   à   à   î   à   î   à   î   à   î   à   î   à   à   à   ^   à   à   ä   à   î   à   î   à   à   à   î   B   à   î   ä   ^   à	 J   J   J 
 ! J 
 ) J 
 1 J 
 9 J 
 A J 
 I J 
 Q J  Y J 
 a J 
 i J  ¹ ;2 Á ^7 Á q; É ¹@ Ñ áE É K é DO é Y2 ñ 2 Á T ¹ “7 ¯Z Á ½a Ôe êe !÷2 !şk Á a r )J 
 )Cw 1Q~ 9]„ A‚ˆ I÷2 I¤ 1´a Y¼” Å› a;a i; qJ  î2 y J 
 !ª y ˆ ² y ;¸ y ¿ +Æ y ;Ë y Ö ‰<ß ù jç ù ‰î ±   Ğ Ù áíö™ÿ!q J  ÁJ %É6+ J   V2 _GYí„ ÙJ  ÙƒKq í„ á¦RA‚^ ¸céÒkéÙ
 éé
 éô ñ	rñxé~é4ƒùE‰ùK é]‘yƒJ —£„ K K ‘ J  1J ™ J  AJ  ¡ J  Q1 Q=
 Yê¥a_±Yo¥¡   QJ  i‰ Q— qJ ÃyÂÉJ  y×Ğyâ
 ‰J Ãyğ×yù ‘J %y	Şy	 ™J åi/	ëiU	òyg	×i‰	ù©¸ÿi—	 i¤	 © J  É Á	yÈ	 é Ô	e yÜ	
 yå	 1ö	a 1ø	r Áú	q 
GÉJ  É
ÑÙÈ	 á-
ù K i;#i;/$ J  $ ¸ci;D, J  , ¸cñ;YQF
hù b
l©   ±J  ¹J  © ‰ 	J sy{
|Š
ƒy“
Œ±²
“	J šQÀ
Şyà
 ¹ë

 1/	ë1U	ò§ÙŒù g	×É ' ù D­É X © ‰	ùù e ù u Ùâ
 ù … ù ’ É ²´ÙÜ	
 © —	 IJ »QJ  iiÁi„ÊYJ ĞJ Ø± J  ‘Ìß  Á  è      $ ; \ Á ` Y d Æ l Á p Y t Æ | Á € Y „ Æ. S . K . [ Û. c . 
 .  h.  q.  . # . + . 3 §. ; . C ¸C S C € k Y	ëT)ëT€kYkY kY¡kYÀkYÃàkYËYkYÃ#Ã^#kY¡kYàkY kYAkYakYkY¡kYÀkYÁkYàkYákY kY@kY`kY€kY kYÀkYàkY kY kY kY04<BH^oy…Œ• ª°µÄ×ã    ,          
   Î@  ĞD  ÒH  ×@  ÜD  æD  ğD  !N  ø]   c 8   9                ) 	  * 	  ,   +   -   .   0   /   K   L   M   N  ÷ >(<Q€                           èğ               ñù               è=               è™            ñé            ñ               ú¤            ñ0               ñ               ñŠ               ñ             ¸      N  p     ~    ™ YÏ ¾         <Module> System.Runtime.CompilerServices CompilationRelaxationsAttribute .ctor RuntimeCompatibilityAttribute System.Reflection AssemblyTitleAttribute AssemblyDescriptionAttribute AssemblyConfigurationAttribute AssemblyCompanyAttribute AssemblyProductAttribute AssemblyCopyrightAttribute AssemblyTrademarkAttribute System.Runtime.InteropServices ComVisibleAttribute GuidAttribute AssemblyFileVersionAttribute System STAThreadAttribute Object adm Enum MulticastDelegate EventArgs Attribute WUL.Ctrls GUserControl GHostForm System.Configuration ApplicationSettingsBase adn a System.Windows.Forms Application EnableVisualStyles SetCompatibleTextRenderingDefault WUL.Forms SkinForm SkinFormTransition get_DefaultTransition WindowAnimateType set_AnimateType System.Drawing.Text TextRenderingHint DefaultTextRenderingHint WUL.Localization ML LoadDefaultLanguages LoadLangResById WUL.Engine SkinEngine ChangeSkin Form Run d Environment SpecialFolder GetFolderPath get_CompanyName String Concat System.IO Path Combine File Exists Copy get_ExecutablePath GetDirectoryName WUL.Configuration IniConfig ReadValue ag3 c Exception get_Message System.Diagnostics Trace WriteLine Directory DirectoryInfo CreateDirectory z Int32 TryParse Empty dwu dwt CompilerGeneratedAttribute IsNullOrEmpty FileAttributes SetAttributes b Format DateTime MinValue Process Start IWin32Window TimeSpan FormStartPosition set_StartPosition DialogResult ShowDialog IDisposable Dispose System.Collections.Generic Dictionary`2 get_Item get_Now ContainsKey ToString Subtract get_TotalDays System.Threading WaitCallback ThreadPool QueueUserWorkItem KeyCollection get_Keys get_Count System.Text StringBuilder Append Newtonsoft.Json JsonConvert DeserializeObject Add System.Net WebRequest Create set_ContentType set_Method set_Timeout Encoding get_UTF8 GetBytes set_ContentLength Stream GetRequestStream Write Close WebResponse GetResponse HttpWebResponse GetResponseStream StreamReader TextReader ReadToEnd IAsyncResult AsyncCallback AttributeUsageAttribute AttributeTargets System.ComponentModel ToolboxItemAttribute IContainer GCheckBox set_Checked set_SkinName Delegate Interlocked CompareExchange Remove GScrollableControl SuspendLayout set_AutoSize System.Drawing Point GControl set_Location Padding set_Margin set_Name Size set_Size set_TabStop EventHandler add_Click set_TabIndex SizeF set_AutoScaleDimensions AutoScaleMode set_AutoScaleMode set_ClientSize GControlCollection get_GControls ResumeLayout PerformLayout GLabel GButton OnLoad set_Visible GetText set_Text set_Enabled Guid r j NewGuid GetHashCode Random Next aeg Control Thread Sleep Nullable`1 dw1 dwy get_Checked CancelEventArgs OnClosing Font FontStyle set_Font Color FromArgb set_ForeColor ContentAlignment set_TextAlign add_CheckedChanged AnchorStyles set_Anchor set_BackgroundSkin ContainerControl get_White set_BackColor set_CloseBox FormBorderStyle set_FormBorderStyle set_FullSkin set_MaximizeBox set_MinimizeBox set_ShowIcon set_ShowInTaskbar SizeGripStyle set_SizeGripStyle System.CodeDom.Compiler GeneratedCodeAttribute DebuggerNonUserCodeAttribute System.Resources ResourceManager System.Globalization CultureInfo Type RuntimeTypeHandle GetTypeFromHandle Assembly get_Assembly EditorBrowsableAttribute EditorBrowsableState SettingsBase Synchronized DrFoneOnlineRating.exe mscorlib Utilities WUL.Core GATracker SensorsTracker DotfuscatorAttribute du2 du3 du4 du5 ResponseData du6 du7 du8 du9 dva StarItem DrFone.OnlineRating StarRatingControl StarRatingGuideForm Resources DrFone.OnlineRating.Properties Settings A_0 e f g h i A_1 .cctor <data>k__BackingField get_data set_data value value__ Invoke BeginInvoke A_2 A_3 EndInvoke <name>k__BackingField <old_value>k__BackingField <new_value>k__BackingField <percent>k__BackingField get_name set_name get_old_value set_old_value get_new_value set_new_value get_percent set_percent RatingClick components oneStar twoStar threeStar fourStar fiveStar disposing ratingResult plan isCollectData collectType starRatingControl desclbl optionCheckBox submitBtn tiplbl A C data name old_value new_value percent Culture Default DrFoneOnlineRating DrFone.OnlineRating.Properties.Resources.resources DrFone.OnlineRating.StarRatingControl.resources DrFone.OnlineRating.StarRatingGuideForm.resources  ?W o n d e r s h a r e _ D r F o n e _ O n l i n e R a t i n g  * . d a t  D e f a u l t  5\ D r . F o n e \ D r F o n e T o o l K i t . i n i  #C u s t o m i z a t i o n . x m l  S y s t e m  D e f a u l t L a n g u a g e  E N G  	d a t a  U A - 1 4 0 7 3 1 5 6 3 - 2 s o c i a l  3p r o d u c t   i s   e m p t y ,   r e t u r n ;  +d r f o n e _ { 0 } _ R a t i n g . i n i  D r . F o n e  R a t i n g  O n l i n e R a t i n g  H a s R a t e d  )H a s S e l e c t N o S h o w A g a i n  R a t e S t a r t T i m e  9< R a t i n g R e c o r d >   s t a r t   p r c . . .    ?< R a t i n g R e c o r d >   s t a r t   p r c   o k . . .    -D r F o n e O n l i n e R a t i n g . e x e  9< R a t i n g R e c o r d >   s h o w   f o r m . . .    ]t u r n   o f f   t h e   t r u s t p i l o t   s c o r i n g   g u i d e ,   r e t u r n .  _U s e r   c h e c k e d   t h e   " D o n ' t   s h o w   m e   a g a i n " ,   r e t u r n . ?< R a t i n g R e c o r d >   s h o w   f o r m   o k . . .    7n o t   m e e t   t h e   r u l e s ,   r e t u r n .  'y y y y - M M - d d   H H : m m : s s 7l e s s   t h a n   { 0 }   d a y s ,   r e t u r n .  %s t a r t   i n f o   c o u n t :    d a t a   i s   n u l l .  ?< R a t i n g S w i t c h H e l p e r >   b e g i n   g e t .  n a m e =  { d a t a :  }  9< R a t i n g S w i t c h H e l p e r >   e r r o r :    ;< R a t i n g S w i t c h H e l p e r >   e n d   g e t .  Ca p p l i c a t i o n / x - w w w - f o r m - u r l e n c o d e d 	P O S T  U< O n l i n e R a t i n g S w i t c h H e l p e r >   g e t j s o n   e r r o r :    oh t t p s : / / d r f o n e - c o l u d . w o n d e r s h a r e . c c / d f u p d a t i n g / g e t v a l u e #B a d R e v i e w C h e c k B o x  P r a i s e C h e c k B o x  o n e S t a r  t w o S t a r  t h r e e S t a r  f o u r S t a r  f i v e S t a r  #S t a r R a t i n g C o n t r o l  I N F _ R a t i n g N o B a d  N o t   t o o   b a d !  -I N F _ R a t i n g D i s a p p o i n t e d  D i s a p p o i n t e d !  #I N F _ R a t i n g A m a z i n g  A m a z i n g !  !O n l i n e R a t i n g P a g e  Oh t t p s : / / d r f o n e . w o n d e r s h a r e . c o m / s u p p o r t /  mh t t p : / / c b s . w o n d e r s h a r e . c o m / g o . p h p ? m = c k & p i d = 3 3 6 0 & n u m = 5 1  =S u b m i t   R a t i n g   R e c o r d   E r r o r : { 0 }  { 0 } _ R a t e  D o _ R a t i n g  R e s e a r c h T y p e  	S t a r  M o d u l e _ t y p e  S t a r _ R e v i e w  D o R e s e a r c h  U s e r R e s e a r c h  T a h o m a  d e s c l b l  R a t e   D r . F o n e  o p t i o n C h e c k B o x  )D o n ' t   s h o w   m e   a g a i n ! B l u e B u t t o n  s u b m i t B t n  S u b m i t  t i p l b l  #s t a r R a t i n g C o n t r o l  'S t a r R a t i n g G u i d e F o r m     QD r F o n e . O n l i n e R a t i n g . P r o p e r t i e s . R e s o u r c e s     ‚¬1p±kHE‰j„œaö      ::>>G?I@KFAEEDIFKLPN !"      i mq  } €…           €©   €½   €Á
 €Á€Á €Á €Å €Ñ €Õ€É€İ4    €Á    €Í€Á    €á  €é €é4   €í 
    €õ  €ù  
  €ı    €ı  ---    
,  9 A E I  M Q  U = I  a   €µu u€İ €İ€İ }€İ    ‰ …   ‘  •    ¡  µ¹  ½ ½ Å ÉÉ·z\V4à‰ ©…‚ÈÓéû°?_Õ
:             @ 3System.Resources.Tools.StronglyTypedResourceBuilder4.0.0.0     Y KMicrosoft.VisualStudio.Editors.SettingsDesigner.SettingsSingleFileGenerator10.0.0.0   U A - 1 4 0 7 3 1 5 6 3 - 2  O n l i n e R a t i n g H a s R a t e d (H a s S e l e c t N o S h o w A g a i n R a t e S t a r t T i m e  $         $ $  €Á €Á €É	€İ4    4  4 4       ( 0 0 ,%) I ,8Y] ­±  ­  ± ±D  D( ( ( 4 ­       ± D        TWrapNonExceptionThrows OnlineRatingGuide   Wondershare  " Copyright Â© Wondershare 2020  ) $840cccbc-f64f-4d62-9ef8-35ef838ebcf4   1.0.0.6   1032:1:0:4.10.2.2252      (€Á€Í<<<€44	€
	,,,,a4€€İu€İa   ´   ÎÊï¾   ‘   lSystem.Resources.ResourceReader, mscorlib, Version=2.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089#System.Resources.RuntimeResourceSet           PADPADP´   ´   ÎÊï¾   ‘   lSystem.Resources.ResourceReader, mscorlib, Version=2.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089#System.Resources.RuntimeResourceSet           PADPADP´   ´   ÎÊï¾   ‘   lSystem.Resources.ResourceReader, mscorlib, Version=2.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089#System.Resources.RuntimeResourceSet           PADPADP´   •          ®•                           •                _CorExeMain mscoree.dll     ÿ%  @                                                                                  €   8  €                  P  €                  h  €                   €                                       0¤  ê          4   V S _ V E R S I O N _ I N F O     ½ïş               ?                         D    V a r F i l e I n f o     $    T r a n s l a t i o n       °ğ   S t r i n g F i l e I n f o   Ì   0 0 0 0 0 4 b 0      C o m m e n t s       8   C o m p a n y N a m e     W o n d e r s h a r e   L   F i l e D e s c r i p t i o n     O n l i n e R a t i n g G u i d e   0   F i l e V e r s i o n     1 . 0 . 0 . 6   N   I n t e r n a l N a m e   D r F o n e O n l i n e R a t i n g . e x e     ^   L e g a l C o p y r i g h t   C o p y r i g h t   ©   W o n d e r s h a r e   2 0 2 0     *   L e g a l T r a d e m a r k s         V   O r i g i n a l F i l e n a m e   D r F o n e O n l i n e R a t i n g . e x e     D   P r o d u c t N a m e     O n l i n e R a t i n g G u i d e   4   P r o d u c t V e r s i o n   1 . 0 . 0 . 6   8   A s s e m b l y   V e r s i o n   1 . 0 . 0 . 6   ï»¿<?xml version="1.0" encoding="UTF-8" standalone="yes"?>

<assembly xmlns="urn:schemas-microsoft-com:asm.v1" manifestVersion="1.0">
  <assemblyIdentity version="1.0.0.0" name="MyApplication.app"/>
  <trustInfo xmlns="urn:schemas-microsoft-com:asm.v2">
    <security>
      <requestedPrivileges xmlns="urn:schemas-microsoft-com:asm.v3">
        <requestedExecutionLevel level="asInvoker" uiAccess="false"/>
      </requestedPrivileges>
    </security>
  </trustInfo>
</assembly>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            À5                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ğR    0‚Râ	*†H†÷ ‚RÓ0‚RÏ10	+ 0L
+‚7 >0<0
+‚70	  ¢€ 0!0	+ !}ó¿73ô3Ó–°Ì*%uŸÁ^ ‚"0‚0‚u ›ùĞ-çïÛPâ@Z0	*†H†÷ 0e10	UUS10U
DigiCert Inc10Uwww.digicert.com1$0"UDigiCert Assured ID Root CA0220801000000Z311109235959Z0b10	UUS10U
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40‚"0	*†H†÷ ‚ 0‚
‚ ¿æshŞ»ä]J<0"0i3ìÂ§%.É!=òŠØYÂá)§=X«všÍ®{„Ä0ó¤8ëVÆ—m«²yòÊÒä_Ö<RRÆ¥~¾Ÿ©WYUr¯h“pÂ²ºu™js2”ÑD.ß‚ó„æt;mqâ-î ÕÉ c)-Îì^NÈ“ø!a›4ëÆ^ì[¼ëÉÏÍ¬4@_±zfîwÈH¨fWWŸTX+·O§0ÙVîÊ{]ã­ÉO^å5ç1ËÚ“^Ü€Ú¶‘˜@yÃxÇ¶±Äµj8ØÔ7¤.}ˆõ‚>‘p«U‚A2×Ûs*n‘|!LÔ¼®u]xfÙ:1Dš3@¿×ZI¤Âæ© gİ¤'¼¡O9µX÷$\Fd÷Áiˆv˜v=Y]Bv‡‰—izHğà¢fštÊŞKçc®æÔï’’:=Ü äE%‰¶šD+~À”´Òamë3ÙÅßK Ì}•Ã÷!²²·»òÕŒp,A`ª±cD•vb~ö€°ûèd¦3Ñ‰á½·æC¤¸¦wá”!²T)%‰låRQGt¾&¬¶AuŞz¬_?É¼ÓA[åPë1ÅÊr"	ß|Lu?cì!_Ä Qko±«†‹OÂÖE_ ü¡ÅÀ¢±~
&™õäi/˜-õÙ©²å £‚:0‚60Uÿ0ÿ0Uì×ã‚Òq]dLß.g?çº˜®O0U#0€Eë¢¯ô’Ë‚1-Q‹§§!ómÈ0Uÿ†0y+m0k0$+0†http://ocsp.digicert.com0C+0†7http://cacerts.digicert.com/DigiCertAssuredIDRootCA.crt0EU>0<0: 8 6†4http://crl3.digicert.com/DigiCertAssuredIDRootCA.crl0U 
00U  0	*†H†÷ ‚ p ¿C\Uç8_ £t=¶×÷¿W½š¬¡‡,ì…^©»"ø‡iT"í¤ˆwm½ôJz/-·8ïôÿ€¹ø¡÷òrŞ$¼RÈNĞ*Şú-VÏùô÷¬0zš‹²^ÔÏÑCD›C!ë–r¡H´™ËO§w'DÔçèY¨ğ¿/¦éò4<ì÷Ç‡¨ÒL@5FjiT°¸¡Vì¤Õ=è±ÜıØôwZ\TŒoï¡P=üv	h„ŸoÊÛ 5`Ë °¬X @cÅ˜"Á²YõUkÏ'«lvÎo#-ô~qj#k"ÿ¸T-'~Ø:Ùğ¶‡–ı[Ñ\¬ÃMŸs·©ŸWª^(â¹”0‚®0‚– 67·$T|ØG¬ı(f*^[0	*†H†÷ 0b10	UUS10U
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40220323000000Z370322235959Z0c10	UUS10U
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CA0‚"0	*†H†÷ ‚ 0‚
‚ Æ†5I³Á=rIQUÇ%Äò‘7©—Q¡ÖÒƒÑL¢m °ÌƒùZö¡DB_¤ˆóhú}óœ‰3P&s–møW¨}ıC´„Úñs±³î+€„Š"ßëÚ=Ä«+>BÜgêQ=ğÖVÔç(-ëÓ±µuçe”)ÓÙìißÙ‡F {ÛDA‰Ü|jWzğ7yŸ]¬Ëè„d´RòvG÷aƒİ_´T!hn7!»@¬_²ŞJ}Îõ9gï¥clä¦ÅÍ6\Õæ¨Ádt@§ÀrÅºN±µXMyş×s“¬,9â¥HÖğ°1©W)–'.õ‡¦NvU&p˜& G CãCc€{un'%˜:8³ööæ;[ìŞ"Ù‚*Ç’¿ Şã>¢súçZl”òR•+Xt@(«sCÎßJ¡k8Å)óÊª–sBhŸ¶F³:£Õà¿ğ¢<ÊBÜH4ÏÒL«ï›=ş¸d*úu($AíB¿œfIRPôQó6IM‹ Ò,W5y+¨óE`¼#X÷ÜaŞ“ş9Àù²0¥L×é˜JX>Óˆş³Ó^KvQ“ÉŒ;[Š"¨Á&ù}_#»dãcà¦á>öÂt²?	vì«]Fuâ`£X	( „TîÎé]È^0½FµÓv¹Òk™Ò3´Í± £‚]0‚Y0Uÿ0ÿ 0UºÙmM…/s)vš/uŒj Èo0U#0€ì×ã‚Òq]dLß.g?çº˜®O0Uÿ†0U%0
+0w+k0i0$+0†http://ocsp.digicert.com0A+0†5http://cacerts.digicert.com/DigiCertTrustedRootG4.crt0CU<0:08 6 4†2http://crl3.digicert.com/DigiCertTrustedRootG4.crl0 U 00g0	`†H†ıl0	*†H†÷ ‚ }YÀ“¶o˜©D"~fÖØ!Bá°.MÏ0SÎ¿ûÇP]âK)ûpŠª)iüiÁÏé>`ÈØå\[×m‡ú„ %41gÍ¶–oÄPLb‚¨½©VÏs"%Î•i?Gwûrt×ÿ«OŠ,z«…ÍC_í`¶ªO‘f,àŠ¬åıŒ¼d&‡l’½|Ğp
|ï¨¼uOºZ÷©²]éÿ(T‰ğÕŠqveÚÌğr£#úÀ'‚D®™'«$&Á·Ş*ëö±y™£V†«
EÉßÄ ç˜ûû¦r¯ÄÇÁÁjqÙÆ€	Ä¶ŸÍ‡‡$»O£I¹wf‘ñrœéKR§7~“S¬;I”Í9zİÿ%c™',=?k§ñfÃAÍO¶@›!!@Ğ·$ÍÜx:ä­å4q’×&kä8s«¦O½?;x­L­ûÄ•{í
_39‡Axz8éœáİ#ı(ÓÇùèñ˜_û+Ø~òFu,',&Ûo{‹6¸“Ôæò™YÊpğ7¿˜ ß O'û`g¡fºİUÀ:)†°˜ +í•A·:Õ˜1´b	
½Ùş¿¤ÑóWÙ¼ú‚Ş2ß‰ğ Í]ÂùĞ# äv&ÙğevB¦)‡	G+æ¤…ü˜–öUT+€úÀò+åÖû©/DJçÛ78¡+öíÖ|ü0‚°0‚˜ ­@²`ÒœLŸ^Í©½“®Ù0	*†H†÷ 0b10	UUS10U
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40210429000000Z360428235959Z0i10	UUS10U
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA10‚"0	*†H†÷ ‚ 0‚
‚ Õ´/BĞ(­x·]Õ9Y±ˆBõ3Œë=—pÅ»Ä…&0Ÿ¤hØ\õë4$áKOÓxCô×ÚùÒÕgRO¡Wüˆ™Á‘Ì>Mp$d³â}4}L€WkCš™òÅ;òïËGZ¦L³ %óÓ‹²ûğŠà	Àe§ú˜€I5‡=Qè!xE.¡Ÿ,áÂÌÅî“IpB2ûÆêóeh‘¢ML‚HRhŞ½W]èeÅ²O…,H¤V„5Öù.œª Ñ7ş”Â|Èê2æÊÂô§£t¥¯9¶«`ãèÖ¹÷1áÜ­ä ØÁ#GG³¡n£«m˜ƒ·jg-Ò½D’°;	×Ç›2ZÂÿj`T‹IÁ“íá´\àoë&ùŒÕ²ù8æêÎ‘õ¾Óûo“a4\¼“E(ƒ6*f(_°sÎ‹&%²ƒÔ\öLíbà^3òèèì
§°+‘²6y¾÷­u¦eÌ»ãHPów‘şÛP¢FÈaX˜õ|<ƒ(­9†ìÔ·SĞøGæu0ì0“v¦[K]taM?‘vŞ¿XËr)AğÕÅm&vhAXšÜ&+ô‰MYÛxÏJ>@G_ÉPs…#!Y`ŠdTÁÌ!è8|fÍx8E0™OÿcOL»ªSA|X=G³ú¶ìŒ2	Ìl<V £‚Y0‚U0Uÿ0ÿ 0Uh7àë¶;ø_†ûşa{ˆeôNB0U#0€ì×ã‚Òq]dLß.g?çº˜®O0Uÿ†0U%0
+0w+k0i0$+0†http://ocsp.digicert.com0A+0†5http://cacerts.digicert.com/DigiCertTrustedRootG4.crt0CU<0:08 6 4†2http://crl3.digicert.com/DigiCertTrustedRootG4.crl0U 00g0g0	*†H†÷ ‚ :#D=vî¼:™ÓVà¥øH4ó,¶ætf÷”r± Ê¯l0'DŸKı£|&Õ7¼:]Hm•Õ?Iô'»EPıœ½¶…àv~7qË"÷ZªÏõ“jãë ÑÕPyˆšŠŠÁ¶½¡H~ÜØ€Ía™VöÉãvçÄä_Cø>”ÿv9=Ô™ÏJİ(ë_&¡•XHÕş×'?ıÑv†İ°`\ó¨îà‰¡½9á8NÚn»6ûå!SZÃÊéjñ¢>ÛC¸3ÈO8’™õİÎTmÙ]@3|â•²Â!usRËFØÄ4¢¥KÍov7,…?Î&é¾°C•ˆ ‚pğÌÊïı)5\‰8U÷7Š‹	¡Ëé1ÿ.\9qá¾œ§
Ö&g·’æN_Şz¬IÏ.¤t’­Û<¤œ†ãÁV+#ÿµêˆ{pkæ ºı:?E¦Äè‘R‹AÀH„K–M«D@ãğ(ÎíñV*/Äd<3®(Œ<Ëˆ¿;ôÎ{ïµëË·ğwæç(?¬®¥/"lAù‚\fÌlÊÅ†Ãö&3K Ójj@0HK4¨Q »­…âYmÊP+êJ¥ı §tçòÖRı¯…H!ùW;´œí†Eô´an¿hâ&`†êÈ¯©ş”çc:†VxN0‚Â0‚ª D¯ó”9¦¿Û?_åa0	*†H†÷ 0c10	UUS10U
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CA0230714000000Z341013235959Z0H10	UUS10U
DigiCert, Inc.1 0UDigiCert Timestamp 20230‚"0	*†H†÷ ‚ 0‚
‚ £SE‡ƒ[¬>T³#àÏŸ×åÒç]¡	Ü/H£—z;*œgÜbXÁ©“§Íª²jİ)ŠbciÓXœ5q¿:—ë”P êÇš;/–fãiçiş[ÃÖ+ Á—”´¥PòÏË¦0hÊƒBÚü	$”¤‚ÚjºØ;Ê]Ş…ûEêalşq^Äš<ğÅ.yfRãÈÖ>_ÚCÓ„õĞÇöH-^Eu–uşİ¡ƒÁ¸æR•µG×x)9kàxY—ãD+JÕ•Îïê‚dMÿ#ãÊ†î´¤!dpëÕå Úc³.éîªö$õ¼›²·_ßğîv}1™eGUJ$/¬+—¾Ÿäı{s>2îR4ûÔ»ëÔ ,4›ãŞnd7‘µQÍªLfƒˆhb»¼AxmäÙàXAûØ±,áQ¯´­êbÓi|dMßÎÑ^Œª«PÉ³Ê¼×Ä;hD£¥;Bıs}îİ
ÿy4~¦\
XL >…iuÇƒdÖuÍvV¥$ú×Äk!ºè4˜/:êk°÷û*†ì{R8©˜	¡q²lq¯>¸o–ÕáşaG
Œşğ¶ÇÕÇŞl$ğ¿B‚Ê q=œ’“´ip'O·µ6ÑÉ_¤p£ì
ñ.dàË"+Êñ(!IQ~fÓ;¾úë‘8ØQÊ”·âP¡ó:ÓŠƒË@{ £‚‹0‚‡0Uÿ€0Uÿ0 0U%ÿ0
+0 U 00g0	`†H†ıl0U#0€ºÙmM…/s)vš/uŒj Èo0U¥¶ïçïÍĞd¡ÕV©e1£ŞÕãI0ZUS0Q0O M K†Ihttp://crl3.digicert.com/DigiCertTrustedG4RSA4096SHA256TimeStampingCA.crl0+ƒ0€0$+0†http://ocsp.digicert.com0X+0†Lhttp://cacerts.digicert.com/DigiCertTrustedG4RSA4096SHA256TimeStampingCA.crt0	*†H†÷ ‚ ÖŞ ©µ˜¼pOŠ<hœØ%ÿË,äÍê]"’ìŒ"©¸Ï€¨ÙçãÅí&‚Šq/İN¶Şl×á`œ+íí=H¸kº|]½Âa7hIw£ëª×'…ó’ÚÂ@8Ÿ]È .%x%*z„)˜¶WyÛ&V+°ó§½7Ø˜vOV¹RÂ¶8©çmA\ŒiÑ¹+ÄÆ{Ïœúxâ“v¢iuÓPäD¾ ©DĞøåIwZ!Å´Ï˜•Tº¹¼ÁiºÏòƒ74n°A&İŞZ—O3Ôw}uE¡¥X&jEŞÙPµPŒ¯V½LÅáFÅ(Ó­çC pŞÌ˜‰êÔ‘7ïMRóÉ`!ÄVGíÚKŒ2ÃˆæXâ¶Û>ù_°BÖã‘ÑªÀUã†¿¬',AĞš3J¨6Ô¹r–~—y8H_ÊÂÜ=2ßuÖ6gZ‰øö§ÇåO5< ½¾œ*lyÜÚDæ:Ş8;^9Xô|s1U €Ë~®¼ş¤ëyeªhÖ"Ê;ëš‚5W(Ëiò2š²ÒØ:¸±F†kºıÄwll®«¯s:èIF·ÕÌ¶8ÀØìõ¶¡¸C,ßNL}hpÀw
Ôà\`»(ÿ8åRZÖ¬"#NôìÓûPkÿwq—DAÉ¸FÓl2|X/gGeås¶™ùk,FïAğğ_àÛÙ­€D¯€AŠ0‚J0‚2 ™ıw€‹ÃKâ$ä!o0	*†H†÷ 0i10	UUS10U
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA10220408000000Z250405235959Z0‚10+‚7<CN1 0+‚7<è¥¿è—è‡ªæ²»åŒº10UPrivate Organization10U91540195754285145H10	UCN10Uè¥¿è—è‡ªæ²»åŒº10U	æ‹‰è¨å¸‚1-0+U
$Wondershare Technology Group Co.,Ltd1-0+U$Wondershare Technology Group Co.,Ltd0‚"0	*†H†÷ ‚ 0‚
‚ ½®\¬€¾x((á‘ƒ"yqJ…¼¡–mP›ğ1X-éì°¹
oÎƒ-TBîtÖ…	ÕÇ‘Ò9ºqu]÷n•l­.ËÒ5¸O—üèÑ³##(4dàlDà¶©$«Sæ’oz[÷ÖGª+™%È6“rqíÊÌs–i£¹KÿÁqÂíJa¥es(×C‘¥›u8›Ğlµæ¡Åô±¿7.%ËfÈ¬J¨OñÌˆ©ÀX>ûÆ8³¸LDó2Ü+õæ]G>¶º›&fDŒĞhsd‹Mú#İOR÷şl²ÔÓ³£áö½ÉĞV{iıe.dÙÏ¢é‘³†Š
–µãse7½adãPŞéÊ
0$€.×÷ ÀŒp¡†¹ÔÙW½yáÎŒoÂ+N„–zIj 6EYWE|ûD§ÇÛƒõ¶£}CÄ!ìíƒ(²…Ö6p"<®GõµÉ;Á·­SuFKô“»P"…×vAjoö)›³g¯ú iÛ¢ÒvQ–í›}Cí0pm9UdÜÕG.c¯› 8‚ÚÅÖ¢axv½/›ŸåŠ¯5¾¯VKÙs¯ODI–Ø\şÑ‹fô­láËt|­Ä<O»û®*2AœrfØÿIÂĞušŠ²ÍHOR`Ô…Áé"w^½‘Àİ‘ÚèÎÑ’È=h°óÉß§Tl¹lóÒ™FTG £‚G0‚C0U#0€h7àë¶;ø_†ûşa{ˆeôNB0UÈÓ«ĞW®ˆn¸IœÎ;Qˆ´<0@U907 5+ )0'%CN-è¥¿è—è‡ªæ²»åŒº-91540195754285145H0Uÿ€0U%0
+0µU­0ª0S Q O†Mhttp://crl3.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crl0S Q O†Mhttp://crl4.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crl0=U 60402g0)0'+http://www.digicert.com/CPS0”+‡0„0$+0†http://ocsp.digicert.com0\+0†Phttp://cacerts.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crt0Uÿ0 0	*†H†÷ ‚ (£@|O_÷±ÔL÷é°7·òéw(á»_H¨Á–ÿhRÓÎYÛâ—“ôóWd²êë£O"^k"=Cè>2ÅûGÏ]Î{@`—K¿t^¶`d–2-{ˆÎÂ×²¿<lÛi PÓ“£×Ò¢ÍRàÒ‚ NÒêÁÍ8ÉÆÖÑO¦¼ï£=Š¼)®,ºeFX’”bZM#¢nD!„D¿*¡K^å¼=œÍ2{‡}¯]°«îÿìšZõÊ²Ãßñ†ğö#ìÄï…³¨}ÜÄ_5$ÓĞ6#G¤›hÎLÔ’5º’¾“ïÙL÷gû^Œ°¸uÂ*|’:7êZqÊßÑ“‰á»†×El%î×z aù€äâØ«•î·Lóö¤”³ŸúW2MñšH"é¯‡üa2ªÔ¤İVDuZÙ>«ÄÉ](º=áó ™¬BE‚L¿~yº·Å†–7bµßÿBÿ ã¨PÛ1-5"ìEÒ›h¶ˆ9‰ yºİú¼\ùnƒœ%6¬_fúƒ8dñî´ÉèÕ¥%Ä­ç®ñº‡yaw:=cå—\·n’ÃlÇİ;Æ.6€åoeEBO\÷8am±³K„š±y—E4š«C´ìEy,	âXx—¶/ù*7«z%¾ïQÆzş•f{Ú£Z%ªÄğ>Â/†«ÉY¾·1‚0^0‚0Z0}0i10	UUS10U
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA1™ıw€‹ÃKâ$ä!o0	+  p0
+‚710 0	*†H†÷	1
+‚70
+‚710
+‚70#	*†H†÷	1ä|ØŒ5Ûp|»2‰‰O‘ˆ9a&ÂØ0	*†H†÷ ‚ ù¬¾tıÄß8JÕœí(L‚¥N†Ú:Y’êÃ
@*	›Ş^¼ßÙhu¤´Ç©gèçå`¨¨š”é#E©i~mo³‹Ğ™QEØæpÿøÌc;äÓ¹wV%cÌÆÙ”¿OóµL¾à;ˆcE0«–ôj#¾0ÈçŞÁY2+‰Q«ó\F‡©‘·$°CT ¢EÍwŠ,V/ÚKVddÄk(€üàÒ4Xš¿#Áò’Ø¡óˆòu´µE÷ÉY`0M?yjø±äçAÁµf›;úÒ9	[…’	Óªè®p/›Ï€•kbD•ÜV¿‰ÖÓ…ÑnÅ¿Êt2pÔ®+4Ş±˜ò˜‰$;hN5Y°èxZOãšOkcd¢QHQPùšÛaB‚õI®AÖãòˆ¨–¡%}¸›œÏ©™g>áÒú6ZDÍök®ïªôû­CâAÇa•ò—ŞŠ+/_ ò¸[-ù“äz‘ÿ–	^Tª°:[f¡â•ÆÌ|6÷gu%9ãioÑ¾O`KLC¯øñ’)¬ê‰;6;ª£ TÚ%4Ìé{zl.7Ÿ²yXx$Ê0lÆ¡2rGfsçJşâ“9}GêLàñ9”Ó®ÖÅßOİaG±Î[UªZâÀa]êû¤’Ui9Ğ\(A¡‚-D0‚	*†H†÷	1‚0‚	0w0c10	UUS10U
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CAD¯ó”9¦¿Û?_åa0	`†He  i0	*†H†÷	1	*†H†÷0	*†H†÷	1240620030209Z0/	*†H†÷	1" ¤Py¸vQO/«àÓÄ¬´r“IfK0‘¢¾¨ñ·XiÊ0	*†H†÷ ‚ =6ä36ªiŠˆ4·:Fã©M@ôÎˆÒ­c±H¬¥:^/ÅgìOªjVàóZ>Éø9ä2„†ü#ä©ü‘6Æô< öÉ°3aêoszé»Ãİ>]ÙD*$q™K“ùtúö ™y¸;út3—Ï<×4ÆÑh*³‰HÌ¿Õ”ƒÎd×¹öŒşpñĞ°&Âõ‘?E(~Ÿ„ï·õ¿Ì -:×#O}š{†4uÄu~dÛ÷f¸ãa áupŠ¬´MMVè,·;¦w»°-…4"É–âPÁ±&œ/u%ÛÂëëC?ãØ§}õ1›’‹5“[§*ğR –²Ò©¬[uøÏ¤C,Üèì­Ë‰€>¼âAKHa¾µhi	…*ñr×JFğ0L-¯Gmßs->œ«%o¬ä®C¼æ{1F$şÆÒ¢«âää>¦Tü[ên¶lxz”ù¢–îî,†ç¼ó.üÊOOáÍ6»	†ÇĞ6Æ‰ŞÕ8%á)™
# :	æóš½<ZºØû8ƒ‡ã/`ñ#bZ=h-‘ 
#À¡Ä›ğˆŠ¸³Rõ¹¡[¢™,¸N4©66ÌŒèf‘»;$a¶ş(•+•Ù×G°5œµá&ÈmÊ—Û”õ‡_à«V©„8k™c?(¿2¢0‚* 
+‚71‚*0‚*	*†H†÷ ‚)ı0‚)ù10	`†He 0\
+‚7 N0L0
+‚70	  ¢€ 010	`†He  Ë?ÉYW?•½fÛ™°<È‹†àNÜ)Óv‹zëµÑ, ‚0‚°0‚˜ ­@²`ÒœLŸ^Í©½“®Ù0	*†H†÷ 0b10	UUS10U
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40210429000000Z360428235959Z0i10	UUS10U
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA10‚"0	*†H†÷ ‚ 0‚
‚ Õ´/BĞ(­x·]Õ9Y±ˆBõ3Œë=—pÅ»Ä…&0Ÿ¤hØ\õë4$áKOÓxCô×ÚùÒÕgRO¡Wüˆ™Á‘Ì>Mp$d³â}4}L€WkCš™òÅ;òïËGZ¦L³ %óÓ‹²ûğŠà	Àe§ú˜€I5‡=Qè!xE.¡Ÿ,áÂÌÅî“IpB2ûÆêóeh‘¢ML‚HRhŞ½W]èeÅ²O…,H¤V„5Öù.œª Ñ7ş”Â|Èê2æÊÂô§£t¥¯9¶«`ãèÖ¹÷1áÜ­ä ØÁ#GG³¡n£«m˜ƒ·jg-Ò½D’°;	×Ç›2ZÂÿj`T‹IÁ“íá´\àoë&ùŒÕ²ù8æêÎ‘õ¾Óûo“a4\¼“E(ƒ6*f(_°sÎ‹&%²ƒÔ\öLíbà^3òèèì
§°+‘²6y¾÷­u¦eÌ»ãHPów‘şÛP¢FÈaX˜õ|<ƒ(­9†ìÔ·SĞøGæu0ì0“v¦[K]taM?‘vŞ¿XËr)AğÕÅm&vhAXšÜ&+ô‰MYÛxÏJ>@G_ÉPs…#!Y`ŠdTÁÌ!è8|fÍx8E0™OÿcOL»ªSA|X=G³ú¶ìŒ2	Ìl<V £‚Y0‚U0Uÿ0ÿ 0Uh7àë¶;ø_†ûşa{ˆeôNB0U#0€ì×ã‚Òq]dLß.g?çº˜®O0Uÿ†0U%0
+0w+k0i0$+0†http://ocsp.digicert.com0A+0†5http://cacerts.digicert.com/DigiCertTrustedRootG4.crt0CU<0:08 6 4†2http://crl3.digicert.com/DigiCertTrustedRootG4.crl0U 00g0g0	*†H†÷ ‚ :#D=vî¼:™ÓVà¥øH4ó,¶ætf÷”r± Ê¯l0'DŸKı£|&Õ7¼:]Hm•Õ?Iô'»EPıœ½¶…àv~7qË"÷ZªÏõ“jãë ÑÕPyˆšŠŠÁ¶½¡H~ÜØ€Ía™VöÉãvçÄä_Cø>”ÿv9=Ô™ÏJİ(ë_&¡•XHÕş×'?ıÑv†İ°`\ó¨îà‰¡½9á8NÚn»6ûå!SZÃÊéjñ¢>ÛC¸3ÈO8’™õİÎTmÙ]@3|â•²Â!usRËFØÄ4¢¥KÍov7,…?Î&é¾°C•ˆ ‚pğÌÊïı)5\‰8U÷7Š‹	¡Ëé1ÿ.\9qá¾œ§
Ö&g·’æN_Şz¬IÏ.¤t’­Û<¤œ†ãÁV+#ÿµêˆ{pkæ ºı:?E¦Äè‘R‹AÀH„K–M«D@ãğ(ÎíñV*/Äd<3®(Œ<Ëˆ¿;ôÎ{ïµëË·ğwæç(?¬®¥/"lAù‚\fÌlÊÅ†Ãö&3K Ójj@0HK4¨Q »­…âYmÊP+êJ¥ı §tçòÖRı¯…H!ùW;´œí†Eô´an¿hâ&`†êÈ¯©ş”çc:†VxN0‚J0‚2 ™ıw€‹ÃKâ$ä!o0	*†H†÷ 0i10	UUS10U
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA10220408000000Z250405235959Z0‚10+‚7<CN1 0+‚7<è¥¿è—è‡ªæ²»åŒº10UPrivate Organization10U91540195754285145H10	UCN10Uè¥¿è—è‡ªæ²»åŒº10U	æ‹‰è¨å¸‚1-0+U
$Wondershare Technology Group Co.,Ltd1-0+U$Wondershare Technology Group Co.,Ltd0‚"0	*†H†÷ ‚ 0‚
‚ ½®\¬€¾x((á‘ƒ"yqJ…¼¡–mP›ğ1X-éì°¹
oÎƒ-TBîtÖ…	ÕÇ‘Ò9ºqu]÷n•l­.ËÒ5¸O—üèÑ³##(4dàlDà¶©$«Sæ’oz[÷ÖGª+™%È6“rqíÊÌs–i£¹KÿÁqÂíJa¥es(×C‘¥›u8›Ğlµæ¡Åô±¿7.%ËfÈ¬J¨OñÌˆ©ÀX>ûÆ8³¸LDó2Ü+õæ]G>¶º›&fDŒĞhsd‹Mú#İOR÷şl²ÔÓ³£áö½ÉĞV{iıe.dÙÏ¢é‘³†Š
–µãse7½adãPŞéÊ
0$€.×÷ ÀŒp¡†¹ÔÙW½yáÎŒoÂ+N„–zIj 6EYWE|ûD§ÇÛƒõ¶£}CÄ!ìíƒ(²…Ö6p"<®GõµÉ;Á·­SuFKô“»P"…×vAjoö)›³g¯ú iÛ¢ÒvQ–í›}Cí0pm9UdÜÕG.c¯› 8‚ÚÅÖ¢axv½/›ŸåŠ¯5¾¯VKÙs¯ODI–Ø\şÑ‹fô­láËt|­Ä<O»û®*2AœrfØÿIÂĞušŠ²ÍHOR`Ô…Áé"w^½‘Àİ‘ÚèÎÑ’È=h°óÉß§Tl¹lóÒ™FTG £‚G0‚C0U#0€h7àë¶;ø_†ûşa{ˆeôNB0UÈÓ«ĞW®ˆn¸IœÎ;Qˆ´<0@U907 5+ )0'%CN-è¥¿è—è‡ªæ²»åŒº-91540195754285145H0Uÿ€0U%0
+0µU­0ª0S Q O†Mhttp://crl3.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crl0S Q O†Mhttp://crl4.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crl0=U 60402g0)0'+http://www.digicert.com/CPS0”+‡0„0$+0†http://ocsp.digicert.com0\+0†Phttp://cacerts.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crt0Uÿ0 0	*†H†÷ ‚ (£@|O_÷±ÔL÷é°7·òéw(á»_H¨Á–ÿhRÓÎYÛâ—“ôóWd²êë£O"^k"=Cè>2ÅûGÏ]Î{@`—K¿t^¶`d–2-{ˆÎÂ×²¿<lÛi PÓ“£×Ò¢ÍRàÒ‚ NÒêÁÍ8ÉÆÖÑO¦¼ï£=Š¼)®,ºeFX’”bZM#¢nD!„D¿*¡K^å¼=œÍ2{‡}¯]°«îÿìšZõÊ²Ãßñ†ğö#ìÄï…³¨}ÜÄ_5$ÓĞ6#G¤›hÎLÔ’5º’¾“ïÙL÷gû^Œ°¸uÂ*|’:7êZqÊßÑ“‰á»†×El%î×z aù€äâØ«•î·Lóö¤”³ŸúW2MñšH"é¯‡üa2ªÔ¤İVDuZÙ>«ÄÉ](º=áó ™¬BE‚L¿~yº·Å†–7bµßÿBÿ ã¨PÛ1-5"ìEÒ›h¶ˆ9‰ yºİú¼\ùnƒœ%6¬_fúƒ8dñî´ÉèÕ¥%Ä­ç®ñº‡yaw:=cå—\·n’ÃlÇİ;Æ.6€åoeEBO\÷8am±³K„š±y—E4š«C´ìEy,	âXx—¶/ù*7«z%¾ïQÆzş•f{Ú£Z%ªÄğ>Â/†«ÉY¾·1‚}0‚y0}0i10	UUS10U
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA1™ıw€‹ÃKâ$ä!o0	`†He  0
+‚710 0
*†H†÷	10	*†H†÷	1
+‚70
+‚710
+‚70/	*†H†÷	1" 	o]I1øĞCÎ[®°ml*¯«£0ã™ˆ$ĞÎ^§0	*†H†÷ ‚ ßb=Ô,ôPÄİX3Rÿûß
²5O"Œ½Èâ“éaĞpÊZ‰kYJ÷Ì7Áµø´œœğØm{˜ÿ½ıÇqu¦Èq,
N‚ÃLG¤NrNŠÿÃdê­ïsÄTÊÇŞÿÄÕêM¡PÖĞÓÛ›È8nÆ øísºŞ¿Ú°ìê¥¨‘yóÌÄP‘4J¬ŒhmÉFPìk/˜ŸEZ:6;	¸ª'ZåE¿öğdbö7Ë+AªÏ“«D‘R¾íf¸Æk_Ò•^Ì­º¿ér&ï'-ˆ+òmœ•4œ!j³¿l‘=J1å£—;eD7;T#‚û/‘ê4»ÆõÆ8c¥²Û´m"PÚŠ7mÑk=ŒUAXånÅ3ZÆ¥x°ÒDğ(bçÏ¿Ô™rú%.sóÜ­HÚoéEÖ²­”ñƒ„’ãûä_?~UX|á69¯"Õ¬‡OƒóçÚåM‚ß@”HbÒ>£¸îHmyµmAŠdèÌVfìªG¢.-aB-ªŸ¹·8#W‚C@9nùqÒ9C»qİe
Í ÷„±¥´±óè‘sUäg .÷ci‚ïC­²÷Â
¹· ín¤¢ëX›ÉÊk"ê1~[á•Z'‰YäŞÄÁµ§9Nüj(Cıoaß=æşàŸªáÔ¦1÷¡‚?0‚;
+‚71‚+0‚'	*†H†÷ ‚0‚10	`†He 0w*†H†÷	 hf0d	`†H†ıl010	`†He  ÛÔ˜¯ıÉbÇ^2‹îkı¾á54P5Jáœª,?…XÜ „?Æ«W/=ûÈóİ\20240620030226Z ‚	0‚Â0‚ª D¯ó”9¦¿Û?_åa0	*†H†÷ 0c10	UUS10U
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CA0230714000000Z341013235959Z0H10	UUS10U
DigiCert, Inc.1 0UDigiCert Timestamp 20230‚"0	*†H†÷ ‚ 0‚
‚ £SE‡ƒ[¬>T³#àÏŸ×åÒç]¡	Ü/H£—z;*œgÜbXÁ©“§Íª²jİ)ŠbciÓXœ5q¿:—ë”P êÇš;/–fãiçiş[ÃÖ+ Á—”´¥PòÏË¦0hÊƒBÚü	$”¤‚ÚjºØ;Ê]Ş…ûEêalşq^Äš<ğÅ.yfRãÈÖ>_ÚCÓ„õĞÇöH-^Eu–uşİ¡ƒÁ¸æR•µG×x)9kàxY—ãD+JÕ•Îïê‚dMÿ#ãÊ†î´¤!dpëÕå Úc³.éîªö$õ¼›²·_ßğîv}1™eGUJ$/¬+—¾Ÿäı{s>2îR4ûÔ»ëÔ ,4›ãŞnd7‘µQÍªLfƒˆhb»¼AxmäÙàXAûØ±,áQ¯´­êbÓi|dMßÎÑ^Œª«PÉ³Ê¼×Ä;hD£¥;Bıs}îİ
ÿy4~¦\
XL >…iuÇƒdÖuÍvV¥$ú×Äk!ºè4˜/:êk°÷û*†ì{R8©˜	¡q²lq¯>¸o–ÕáşaG
Œşğ¶ÇÕÇŞl$ğ¿B‚Ê q=œ’“´ip'O·µ6ÑÉ_¤p£ì
ñ.dàË"+Êñ(!IQ~fÓ;¾úë‘8ØQÊ”·âP¡ó:ÓŠƒË@{ £‚‹0‚‡0Uÿ€0Uÿ0 0U%ÿ0
+0 U 00g0	`†H†ıl0U#0€ºÙmM…/s)vš/uŒj Èo0U¥¶ïçïÍĞd¡ÕV©e1£ŞÕãI0ZUS0Q0O M K†Ihttp://crl3.digicert.com/DigiCertTrustedG4RSA4096SHA256TimeStampingCA.crl0+ƒ0€0$+0†http://ocsp.digicert.com0X+0†Lhttp://cacerts.digicert.com/DigiCertTrustedG4RSA4096SHA256TimeStampingCA.crt0	*†H†÷ ‚ ÖŞ ©µ˜¼pOŠ<hœØ%ÿË,äÍê]"’ìŒ"©¸Ï€¨ÙçãÅí&‚Šq/İN¶Şl×á`œ+íí=H¸kº|]½Âa7hIw£ëª×'…ó’ÚÂ@8Ÿ]È .%x%*z„)˜¶WyÛ&V+°ó§½7Ø˜vOV¹RÂ¶8©çmA\ŒiÑ¹+ÄÆ{Ïœúxâ“v¢iuÓPäD¾ ©DĞøåIwZ!Å´Ï˜•Tº¹¼ÁiºÏòƒ74n°A&İŞZ—O3Ôw}uE¡¥X&jEŞÙPµPŒ¯V½LÅáFÅ(Ó­çC pŞÌ˜‰êÔ‘7ïMRóÉ`!ÄVGíÚKŒ2ÃˆæXâ¶Û>ù_°BÖã‘ÑªÀUã†¿¬',AĞš3J¨6Ô¹r–~—y8H_ÊÂÜ=2ßuÖ6gZ‰øö§ÇåO5< ½¾œ*lyÜÚDæ:Ş8;^9Xô|s1U €Ë~®¼ş¤ëyeªhÖ"Ê;ëš‚5W(Ëiò2š²ÒØ:¸±F†kºıÄwll®«¯s:èIF·ÕÌ¶8ÀØìõ¶¡¸C,ßNL}hpÀw
Ôà\`»(ÿ8åRZÖ¬"#NôìÓûPkÿwq—DAÉ¸FÓl2|X/gGeås¶™ùk,FïAğğ_àÛÙ­€D¯€AŠ0‚®0‚– 67·$T|ØG¬ı(f*^[0	*†H†÷ 0b10	UUS10U
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40220323000000Z370322235959Z0c10	UUS10U
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CA0‚"0	*†H†÷ ‚ 0‚
‚ Æ†5I³Á=rIQUÇ%Äò‘7©—Q¡ÖÒƒÑL¢m °ÌƒùZö¡DB_¤ˆóhú}óœ‰3P&s–møW¨}ıC´„Úñs±³î+€„Š"ßëÚ=Ä«+>BÜgêQ=ğÖVÔç(-ëÓ±µuçe”)ÓÙìißÙ‡F {ÛDA‰Ü|jWzğ7yŸ]¬Ëè„d´RòvG÷aƒİ_´T!hn7!»@¬_²ŞJ}Îõ9gï¥clä¦ÅÍ6\Õæ¨Ádt@§ÀrÅºN±µXMyş×s“¬,9â¥HÖğ°1©W)–'.õ‡¦NvU&p˜& G CãCc€{un'%˜:8³ööæ;[ìŞ"Ù‚*Ç’¿ Şã>¢súçZl”òR•+Xt@(«sCÎßJ¡k8Å)óÊª–sBhŸ¶F³:£Õà¿ğ¢<ÊBÜH4ÏÒL«ï›=ş¸d*úu($AíB¿œfIRPôQó6IM‹ Ò,W5y+¨óE`¼#X÷ÜaŞ“ş9Àù²0¥L×é˜JX>Óˆş³Ó^KvQ“ÉŒ;[Š"¨Á&ù}_#»dãcà¦á>öÂt²?	vì«]Fuâ`£X	( „TîÎé]È^0½FµÓv¹Òk™Ò3´Í± £‚]0‚Y0Uÿ0ÿ 0UºÙmM…/s)vš/uŒj Èo0U#0€ì×ã‚Òq]dLß.g?çº˜®O0Uÿ†0U%0
+0w+k0i0$+0†http://ocsp.digicert.com0A+0†5http://cacerts.digicert.com/DigiCertTrustedRootG4.crt0CU<0:08 6 4†2http://crl3.digicert.com/DigiCertTrustedRootG4.crl0 U 00g0	`†H†ıl0	*†H†÷ ‚ }YÀ“¶o˜©D"~fÖØ!Bá°.MÏ0SÎ¿ûÇP]âK)ûpŠª)iüiÁÏé>`ÈØå\[×m‡ú„ %41gÍ¶–oÄPLb‚¨½©VÏs"%Î•i?Gwûrt×ÿ«OŠ,z«…ÍC_í`¶ªO‘f,àŠ¬åıŒ¼d&‡l’½|Ğp
|ï¨¼uOºZ÷©²]éÿ(T‰ğÕŠqveÚÌğr£#úÀ'‚D®™'«$&Á·Ş*ëö±y™£V†«
EÉßÄ ç˜ûû¦r¯ÄÇÁÁjqÙÆ€	Ä¶ŸÍ‡‡$»O£I¹wf‘ñrœéKR§7~“S¬;I”Í9zİÿ%c™',=?k§ñfÃAÍO¶@›!!@Ğ·$ÍÜx:ä­å4q’×&kä8s«¦O½?;x­L­ûÄ•{í
_39‡Axz8éœáİ#ı(ÓÇùèñ˜_û+Ø~òFu,',&Ûo{‹6¸“Ôæò™YÊpğ7¿˜ ß O'û`g¡fºİUÀ:)†°˜ +í•A·:Õ˜1´b	
½Ùş¿¤ÑóWÙ¼ú‚Ş2ß‰ğ Í]ÂùĞ# äv&ÙğevB¦)‡	G+æ¤…ü˜–öUT+€úÀò+åÖû©/DJçÛ78¡+öíÖ|ü0‚0‚u ›ùĞ-çïÛPâ@Z0	*†H†÷ 0e10	UUS10U
DigiCert Inc10Uwww.digicert.com1$0"UDigiCert Assured ID Root CA0220801000000Z311109235959Z0b10	UUS10U
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40‚"0	*†H†÷ ‚ 0‚
‚ ¿æshŞ»ä]J<0"0i3ìÂ§%.É!=òŠØYÂá)§=X«všÍ®{„Ä0ó¤8ëVÆ—m«²yòÊÒä_Ö<RRÆ¥~¾Ÿ©WYUr¯h“pÂ²ºu™js2”ÑD.ß‚ó„æt;mqâ-î ÕÉ c)-Îì^NÈ“ø!a›4ëÆ^ì[¼ëÉÏÍ¬4@_±zfîwÈH¨fWWŸTX+·O§0ÙVîÊ{]ã­ÉO^å5ç1ËÚ“^Ü€Ú¶‘˜@yÃxÇ¶±Äµj8ØÔ7¤.}ˆõ‚>‘p«U‚A2×Ûs*n‘|!LÔ¼®u]xfÙ:1Dš3@¿×ZI¤Âæ© gİ¤'¼¡O9µX÷$\Fd÷Áiˆv˜v=Y]Bv‡‰—izHğà¢fštÊŞKçc®æÔï’’:=Ü äE%‰¶šD+~À”´Òamë3ÙÅßK Ì}•Ã÷!²²·»òÕŒp,A`ª±cD•vb~ö€°ûèd¦3Ñ‰á½·æC¤¸¦wá”!²T)%‰låRQGt¾&¬¶AuŞz¬_?É¼ÓA[åPë1ÅÊr"	ß|Lu?cì!_Ä Qko±«†‹OÂÖE_ ü¡ÅÀ¢±~
&™õäi/˜-õÙ©²å £‚:0‚60Uÿ0ÿ0Uì×ã‚Òq]dLß.g?çº˜®O0U#0€Eë¢¯ô’Ë‚1-Q‹§§!ómÈ0Uÿ†0y+m0k0$+0†http://ocsp.digicert.com0C+0†7http://cacerts.digicert.com/DigiCertAssuredIDRootCA.crt0EU>0<0: 8 6†4http://crl3.digicert.com/DigiCertAssuredIDRootCA.crl0U 
00U  0	*†H†÷ ‚ p ¿C\Uç8_ £t=¶×÷¿W½š¬¡‡,ì…^©»"ø‡iT"í¤ˆwm½ôJz/-·8ïôÿ€¹ø¡÷òrŞ$¼RÈNĞ*Şú-VÏùô÷¬0zš‹²^ÔÏÑCD›C!ë–r¡H´™ËO§w'DÔçèY¨ğ¿/¦éò4<ì÷Ç‡¨ÒL@5FjiT°¸¡Vì¤Õ=è±ÜıØôwZ\TŒoï¡P=üv	h„ŸoÊÛ 5`Ë °¬X @cÅ˜"Á²YõUkÏ'«lvÎo#-ô~qj#k"ÿ¸T-'~Ø:Ùğ¶‡–ı[Ñ\¬ÃMŸs·©ŸWª^(â¹”1‚v0‚r0w0c10	UUS10U
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CAD¯ó”9¦¿Û?_åa0	`†He  Ñ0	*†H†÷	1*†H†÷	0	*†H†÷	1240620030226Z0+*†H†÷	1000fğ+2ÂÂÉ‚]ÎªŠÉÆOœÏ@0/	*†H†÷	1"  ¡h¾S`Òô¥7›Ÿ)’)á&ÇãßM¢Cn~ôí¯07*†H†÷	/1(0&0$0" Òöämít"ÌÑÔ@WhA6o‚ŠÚUš®3¯MšÔx(0	*†H†÷ ‚  oîQmä½>_ìUu$l*ıÎ§ÒÙç;’»„•¸÷À[ßv~´PÓ'Ïni1ûltê x¼CìVŒ/¸n£j$”¨w-İàs9f‹Ô­#¶Ü ¿ùV§z¢8¼¾;ŞíM2Æ+d7hkÏ@s÷Tb¼Ìtğ
1j!¡á—NZ„ÆKEõKÙ,‘ŠvUNcôa‹KDx“õÒ;D›êÑ½1¿kS×b!U^Lˆª0ü-q‡M{/‚îz®XY
v€GÂÓıŠ-(Ø|N‡jKÚ}ŠÂÚƒF"9¾…ÆÑN9Ä¸Šé[Ò~mâQ#6|…0_“zóŸE Öö~s»Ãˆªc,­PÉşP%¾ùªÇØËx_Œ{}h‚é~ê»ßójìl]èòœh?˜<ÖË£ûKíE¡õŠÊ3éGÕáo€ÆCvç_ªuşïNO½Ÿ«x~A†:¢³)¶<Ğ»ÖÇÌJ¶İKÛÏS5­rš;ŠpÅ—\o½Ø6h$ùÏ.fÜ¥X¯ˆI¤Ñ¿§Ó??êÂRÏuŠ<©î¡¤g™İ4´ªº:+şA¥+€S‰–0—šO|næÖŞµßãB	†Šõ_‘Bˆ†É>ÿWi£Å¯m”õsô}Áœ¿$rDòa5 ŒZwüm‰#œåzL$                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  elf->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            557 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\NullsafeMethodCall($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            558 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            559 => null,
            560 => null,
            561 => null,
            562 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            563 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\NullsafePropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            564 => null,
            565 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            566 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            567 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable(new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos])), $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos])); $self->errorState = 2;
            },
            568 => static function ($self, $stackPos) {
                 $var = $self->semStack[$stackPos-(1-1)]->name; $self->semValue = \is_string($var) ? new Node\VarLikeIdentifier($var, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])) : $var;
            },
            569 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\StaticPropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            570 => null,
            571 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            572 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            573 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            574 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\NullsafePropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            575 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\StaticPropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            576 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\StaticPropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            577 => null,
            578 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            579 => null,
            580 => null,
            581 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            582 => null,
            583 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])); $self->errorState = 2;
            },
            584 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\List_($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos])); $self->semValue->setAttribute('kind', Expr\List_::KIND_LIST);
            $self->postprocessList($self->semValue);
            },
            585 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)]; $end = count($self->semValue)-1; if ($self->semValue[$end]->value instanceof Expr\Error) array_pop($self->semValue);
            },
            586 => null,
            587 => static function ($self, $stackPos) {
                 /* do nothing -- prevent default action of $$=$self->semStack[$1]. See $551. */
            },
            588 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            589 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            590 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(1-1)], null, false, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            591 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(2-2)], null, true, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            592 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(1-1)], null, false, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            593 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(3-3)], $self->semStack[$stackPos-(3-1)], false, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            594 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(4-4)], $self->semStack[$stackPos-(4-1)], true, $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            595 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(3-3)], $self->semStack[$stackPos-(3-1)], false, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            596 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(2-2)], null, false, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]), true);
            },
            597 => static function ($self, $stackPos) {
                 /* Create an Error node now to remember the position. We'll later either report an error,
             or convert this into a null element, depending on whether this is a creation or destructuring context. */
          $attrs = $self->createEmptyElemAttributes($self->tokenPos);
          $self->semValue = new Node\ArrayItem(new Expr\Error($attrs), null, false, $attrs);
            },
            598 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            599 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            600 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            601 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)]);
            },
            602 => static function ($self, $stackPos) {
                 $attrs = $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]); $attrs['rawValue'] = $self->semStack[$stackPos-(1-1)]; $self->semValue = new Node\InterpolatedStringPart($self->semStack[$stackPos-(1-1)], $attrs);
            },
            603 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            604 => null,
            605 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            606 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            607 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\NullsafePropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            608 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            609 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            610 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(6-2)], $self->semStack[$stackPos-(6-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]));
            },
            611 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            612 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\String_($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            613 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseNumString($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            614 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseNumString('-' . $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            615 => null,
        ];
    }
}
