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
    public const T_FINAL = 3llback,#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle .peopleIcon .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link .peopleIcon .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle .peopleIcon .msbdsb_person_initials .msbdsb_person_icon_fallback{fill:WindowText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle{color:-ms-hotlight;background:Window}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle:hover *,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle:hover *{background:transparent;color:Window;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization.msb_dsb_independent_orgchart,#msb_dsb_root .msbdsb-mp-content .msbdsb_search_suggestions_card,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization.msb_dsb_independent_orgchart,#msb_dsb_brtop .msbdsb-mp-content .msbdsb_search_suggestions_card{background:Window !important}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title{border-radius:6px 6px 0 0;border-bottom:1px solid WindowText;border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title *,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title *{color:WindowText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title:hover,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title:hover{background-color:Highlight}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title:hover *,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title:hover *{background:transparent;color:HighlightText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;border-bottom:1px solid transparent}#msb_dsb_root .msbdsb-mp-content .dsb-label,#msb_dsb_brtop .msbdsb-mp-content .dsb-label{color:WindowText !important}#msb_dsb_root .msbdsb-mp-content .dsb-hero-row,#msb_dsb_brtop .msbdsb-mp-content .dsb-hero-row{-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important;background:transparent}#msb_dsb_root .msbdsb-mp-content .dsb-hero-row .msb-dsb-tooltip.leftAdjust,#msb_dsb_brtop .msbdsb-mp-content .dsb-hero-row .msb-dsb-tooltip.leftAdjust{background:transparent}#msb_dsb_root .msbdsb-mp-content .msb-dsb-tooltip.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msb-dsb-tooltip.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text{border:1px solid WindowText !important;color:WindowText !important;background:Window !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text::after{border-color:WindowText transparent transparent transparent !important}#msb_dsb_root .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text .msb-dsb-tooltip-lines{color:WindowText !important;background:Window !important}#msb_dsb_root .msbdsb-mp-content .info-icon-tooltip-base .info-icon-tooltip,#msb_dsb_brtop .msbdsb-mp-content .info-icon-tooltip-base .info-icon-tooltip{border:1px solid WindowText !important;color:WindowText !important;background:Window !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .info-icon-tooltip-base::before,#msb_dsb_brtop .msbdsb-mp-content .info-icon-tooltip-base::before{border-color:WindowText transparent transparent transparent}#msb_dsb_root .msbdsb-mp-content .info-icon-tooltip-base.msbdsb_keyboard_selected:focus .info_icon,#msb_dsb_brtop .msbdsb-mp-content .info-icon-tooltip-base.msbdsb_keyboard_selected:focus .info_icon{box-shadow:0 0 0 2px Highlight}#msb_dsb_root .msbdsb-mp-content .dismiss_button,#msb_dsb_brtop .msbdsb-mp-content .dismiss_button{background:transparent}#msb_dsb_root .msbdsb-mp-content .dismiss_button div.cancel_icon>svg,#msb_dsb_brtop .msbdsb-mp-content .dismiss_button div.cancel_icon>svg{fill:-ms-hotlight !important}#msb_dsb_root .msbdsb-mp-content .dismiss_button:hover,#msb_dsb_brtop .msbdsb-mp-content .dismiss_button:hover{background:Highlight}#msb_dsb_root .msbdsb-mp-content .dismiss_button:hover div.cancel_icon>svg,#msb_dsb_brtop .msbdsb-mp-content .dismiss_button:hover div.cancel_icon>svg{fill:HighlightText !important}#msb_dsb_root .msbdsb-mp-content div.msbdsb_fluent_icon:not(.msbdsb_pagination_flipper_left_icon,.msbdsb_pagination_flipper_right_icon)>svg>path,#msb_dsb_brtop .msbdsb-mp-content div.msbdsb_fluent_icon:not(.msbdsb_pagination_flipper_left_icon,.msbdsb_pagination_flipper_right_icon)>svg>path{fill:WindowText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card{background:Window !important;border:1px solid WindowText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item{border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item:hover,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item:hover{background:Highlight;color:HighlightText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item:hover *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item:hover *{background:transparent;color:HighlightText !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card{background:Window !important;border:1px solid WindowText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .chat-message-mentioned-name,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .chat-message-link,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .email-message-mentioned-name,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .email-message-link,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .chat-message-mentioned-name,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .chat-message-link,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .email-message-mentioned-name,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .email-message-link{color:WindowText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .overlapping_area,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .overlapping_area>li,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .msbdsb_feed_card_content,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .overlapping_area,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .overlapping_area>li,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .msbdsb_feed_card_content{border-radius:4px}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable:hover div.msbdsb_fluent_icon>svg,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable:hover div.msbdsb_fluent_icon>svg{fill:HighlightText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview{border:1px solid HighlightText;border-radius:4px}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview *{background:Highlight}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_preview_icon,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_preview_icon{background-color:Window}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body .feed_item_content,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body .feed_item_footer,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body .feed_item_content,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body .feed_item_footer,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body *{color:HighlightText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_person_initials,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_person_initials{color:WindowText;background:Window}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_person_initials .msbdsb_person_icon_fallback{fill:WindowText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item .sender_location_icon,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item .sender_location_icon{background:WindowText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item .feed_item_footer,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item .feed_item_footer{color:WindowText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_content.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_content.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;border-radius:4px}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_footer,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_footer{background-color:transparent !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb-peoplehighlights-feed .msbdsb-peoplehighlights-feed-item:hover,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb-peoplehighlights-feed .msbdsb-peoplehighlights-feed-item:hover{background:Highlight !important;color:HighlightText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb-peoplehighlights-feed .msbdsb-peoplehighlights-feed-item:hover *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb-peoplehighlights-feed .msbdsb-peoplehighlights-feed-item:hover *{background:transparent;color:HighlightText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .suggested_entity:hover .entity_title,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .suggested_entity:hover .entity_subtitle,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .suggested_entity:hover .entity_title,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .suggested_entity:hover .entity_subtitle{color:HighlightText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_divider,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_divider{border:.5px solid rgba(255,255,255,.0837)}#msb_dsb_root .msbdsb-mp-content .chat_suggestion,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion{border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bce.msbdsb_keyboard_selected:focus,#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bcb.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bce.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bcb.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;box-shadow:0 0 0 1px Highlight}#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bce:hover,#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bcb:hover,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bce:hover,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bcb:hover{background:Highlight !important;color:WindowText !important}#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bce:hover *,#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bcb:hover *,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bce:hover *,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bcb:hover *{background:transparent;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_selectable,#msb_dsb_brtop .msbdsb_selectable{border:1px solid -ms-hotlight;background:Window !important}#msb_dsb_root .msbdsb_selectable:hover,#msb_dsb_brtop .msbdsb_selectable:hover{background:Highlight !important}#msb_dsb_root .msbdsb_selectable:hover *,#msb_dsb_brtop .msbdsb_selectable:hover *{background:transparent;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_selectable:hover .msbdsb_nested_button *,#msb_dsb_brtop .msbdsb_selectable:hover .msbdsb_nested_button *{color:WindowText !important}#msb_dsb_root .msbdsb_selectable:hover .msbdsb-file-hero-name,#msb_dsb_root .msbdsb_selectable:hover .msbdsb-file-hero-tidbit,#msb_dsb_brtop .msbdsb_selectable:hover .msbdsb-file-hero-name,#msb_dsb_brtop .msbdsb_selectable:hover .msbdsb-file-hero-tidbit{color:HighlightText !important}#msb_dsb_root .msbdsb_selectable .msbdsb_nested_button,#msb_dsb_brtop .msbdsb_selectable .msbdsb_nested_button{border:1px solid -ms-hotlight;background:Window !important}#msb_dsb_root .msbdsb_selectable .msbdsb_nested_button:hover,#msb_dsb_brtop .msbdsb_selectable .msbdsb_nested_button:hover{background:Highlight !important}#msb_dsb_root .msbdsb_selectable .msbdsb_nested_button.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_selectable .msbdsb_nested_button.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;box-shadow:0 0 0 1px Highlight}#msb_dsb_root .msbdsb_hyperlink,#msb_dsb_brtop .msbdsb_hyperlink{color:-ms-hotlight}#msb_dsb_root .msbdsb_hyperlink:hover,#msb_dsb_brtop .msbdsb_hyperlink:hover{text-decoration:underline}#msb_dsb_root .msbdsb_hyperlink.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_hyperlink.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;outline:none !important;border-radius:4px}body[dir] #msb_dsb_root .msbdsb_hyperlink.msbdsb_keyboard_selected:focus,body[dir] #msb_dsb_brtop .msbdsb_hyperlink.msbdsb_keyboard_selected:focus{margin:1px}#msb_dsb_root .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_circle,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_circle{-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_circle .status_icon,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_circle .status_icon{-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_profile .meeting_attendee_icon_container,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_profile .meeting_attendee_icon_container{border:1px solid transparent}#msb_dsb_root .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_profile .meeting_attendee_icon_container.meeting_organizer,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_profile .meeting_attendee_icon_container.meeting_organizer{border-color:Highlight}#msb_dsb_root .msbdsb_meeting_card .suggested_entity,#msb_dsb_brtop .msbdsb_meeting_card .suggested_entity{border:1px solid -ms-hotlight !important}#msb_dsb_root .msbdsb_meeting_card:hover .coloured_bar,#msb_dsb_brtop .msbdsb_meeting_card:hover .coloured_bar{background:WindowText !important}#msb_dsb_root .msbdsb_meeting_card:hover .suggestion_header,#msb_dsb_root .msbdsb_meeting_card:hover *,#msb_dsb_brtop .msbdsb_meeting_card:hover .suggestion_header,#msb_dsb_brtop .msbdsb_meeting_card:hover *{color:HighlightText}#msb_dsb_root .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container,#msb_dsb_brtop .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container{background:Window}#msb_dsb_root .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container .more_icon,#msb_dsb_brtop .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container .more_icon{border-color:-ms-hotlight}#msb_dsb_root .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container:hover,#msb_dsb_brtop .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container:hover{border-color:Highlight !important}#msb_dsb_root .msbdsb_meeting_card .msbdsb_person_initials,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_person_initials{color:WindowText;background:Window}#msb_dsb_root .msbdsb_meeting_card .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_person_initials .msbdsb_person_icon_fallback{fill:WindowText}#msb_dsb_root .msbdsb_meeting_card .coloured_bar,#msb_dsb_brtop .msbdsb_meeting_card .coloured_bar{background:WindowText}#msb_dsb_root .msbdsb_meeting_card .more_files_count,#msb_dsb_root .msbdsb_meeting_card .more_icon,#msb_dsb_brtop .msbdsb_meeting_card .more_files_count,#msb_dsb_brtop .msbdsb_meeting_card .more_icon{color:-ms-hotlight !important}#msb_dsb_root .msbdsb_meeting_card .more_files_count:hover,#msb_dsb_root .msbdsb_meeting_card .more_icon:hover,#msb_dsb_brtop .msbdsb_meeting_card .more_files_count:hover,#msb_dsb_brtop .msbdsb_meeting_card .more_icon:hover{color:HighlightText !important}#msb_dsb_root .msbdsb_meeting_card .more_files_count:hover *,#msb_dsb_root .msbdsb_meeting_card .more_icon:hover *,#msb_dsb_brtop .msbdsb_meeting_card .more_files_count:hover *,#msb_dsb_brtop .msbdsb_meeting_card .more_icon:hover *{color:HighlightText !important}#msb_dsb_root .msbdsb_meeting_card .more_files_count.msbdsb_keyboard_selected:focus,#msb_dsb_root .msbdsb_meeting_card .more_icon.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_meeting_card .more_files_count.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_meeting_card .more_icon.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb_meeting_card .suggested_entity:hover .entity_title,#msb_dsb_root .msbdsb_meeting_card .suggested_entity:hover .entity_subtitle,#msb_dsb_brtop .msbdsb_meeting_card .suggested_entity:hover .entity_title,#msb_dsb_brtop .msbdsb_meeting_card .suggested_entity:hover .entity_subtitle{color:HighlightText !important}#msb_dsb_root .info-icon-tooltip-base .info-icon-tooltip,#msb_dsb_brtop .info-icon-tooltip-base .info-icon-tooltip{border:1px solid WindowText !important;color:WindowText !important;background:Window !important}#msb_dsb_root .info-icon-tooltip-base .info-icon-tooltip::after,#msb_dsb_brtop .info-icon-tooltip-base .info-icon-tooltip::after{border-color:WindowText transparent transparent transparent !important}#msb_dsb_root .msbdsb_learning_card .learning_card_suggestions_container,#msb_dsb_brtop .msbdsb_learning_card .learning_card_suggestions_container{background:transparent}#msb_dsb_root .msbdsb_search_suggestions_card,#msb_dsb_brtop .msbdsb_search_suggestions_card{border:1px solid WindowText}#msb_dsb_root .msbdsb_feed_card:hover .msbdsb_suggestion_pill,#msb_dsb_brtop .msbdsb_feed_card:hover .msbdsb_suggestion_pill{background:Window !important;border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb_feed_card:hover .msbdsb_suggestion_pill .msbdsb_suggestion_contents,#msb_dsb_brtop .msbdsb_feed_card:hover .msbdsb_suggestion_pill .msbdsb_suggestion_contents{color:WindowText !important;fill:WindowText !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover{background:Highlight !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover *,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover *{background:transparent !important;color:HighlightText !important;fill:HighlightText !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text{border:1px solid WindowText !important;color:WindowText !important;background:Window !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after{border-color:WindowText transparent transparent transparent !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines{color:WindowText !important;background:Window !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover{background:Highlight !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover *,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover *,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover *,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover *{background:transparent !important;color:HighlightText !important;fill:HighlightText !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text{border:1px solid WindowText !important;color:WindowText !important;background:Window !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after{border-color:WindowText transparent transparent transparent !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines{color:WindowText !important;background:Window !important}#msb_dsb_root .msbdsb_suggestion_pill,#msb_dsb_brtop .msbdsb_suggestion_pill{background:Window !important;border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb_suggestion_pill .msbdsb_suggestion_contents,#msb_dsb_brtop .msbdsb_suggestion_pill .msbdsb_suggestion_contents{color:WindowText !important;fill:WindowText !important}#msb_dsb_root .msbdsb_suggestion_pill.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_suggestion_pill.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msb_dsb_pagination_flipper,#msb_dsb_brtop .msb_dsb_pagination_flipper{border:1px solid -ms-hotlight}#msb_dsb_root .msb_dsb_pagination_flipper.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msb_dsb_pagination_flipper.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msb_dsb_pagination_flipper *,#msb_dsb_brtop .msb_dsb_pagination_flipper *{background-color:transparent !important}#msb_dsb_root .msb_dsb_pagination_flipper:hover,#msb_dsb_brtop .msb_dsb_pagination_flipper:hover{background-color:Highlight !important}#msb_dsb_root .msb_dsb_pagination_flipper:hover *,#msb_dsb_brtop .msb_dsb_pagination_flipper:hover *{fill:Window !important}#msb_dsb_root .msb_dsb_pagination_dot,#msb_dsb_brtop .msb_dsb_pagination_dot{background-color:WindowText !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card{background-color:Window !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top{background:Window !important;border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top .msbdsb_suggestion_contents,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top .msbdsb_suggestion_contents{color:WindowText !important;fill:WindowText !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover{background:Highlight !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover *,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover *{background:transparent !important;color:HighlightText !important;fill:HighlightText !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text{border:1px solid WindowText !important;color:WindowText !important;background:Window !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text::after{border-color:WindowText transparent transparent transparent !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines{color:WindowText !important;background:Window !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msb-dsb-feedback-tooltip .feedback-button,#msb_dsb_brtop .msb-dsb-feedback-tooltip .feedback-button{border:1px solid -ms-hotlight}#msb_dsb_root .msb-dsb-feedback-tooltip .feedback-button:hover,#msb_dsb_brtop .msb-dsb-feedback-tooltip .feedback-button:hover{background:Highlight !important}#msb_dsb_root .msb-dsb-feedback-tooltip .feedback-button:hover *,#msb_dsb_brtop .msb-dsb-feedback-tooltip .feedback-button:hover *{background:transparent;color:HighlightText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msb-dsb-feedback-tooltip .feedback-button.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msb-dsb-feedback-tooltip .feedback-button.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card{color:WindowText !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background{background:Window !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body .feed_item_content,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body .feed_item_footer,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body *,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body .feed_item_content,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body .feed_item_footer,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body *{color:WindowText !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable{border:1px solid transparent;border-radius:0 !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .overlapping_area,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .overlapping_area>li,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .msbdsb_feed_card_content,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .overlapping_area,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .overlapping_area>li,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .msbdsb_feed_card_content{border-radius:0 !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable.msbdsb_keyboard_selected:focus{border-radius:0 !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover{color:HighlightText !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .chat-message-mentioned-name,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .chat-message-link,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .email-message-mentioned-name,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .email-message-link,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .chat-message-mentioned-name,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .chat-message-link,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .email-message-mentioned-name,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .email-message-link{color:HighlightText !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .msbdsb_feed_item_title div.msbdsb_tidbit_icon>svg,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .msbdsb_feed_item_title div.msbdsb_tidbit_icon>svg{fill:HighlightText !important}#msb_dsb_root .carousel-container .dsb-carousel__button,#msb_dsb_brtop .carousel-container .dsb-carousel__button{background-color:Window;box-shadow:inset 0 0 0 2px -ms-hotlight}#msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{width:0;height:0;border-radius:6px;border-bottom:6px solid rgba(0,0,0,.3);transform:rotate(-90deg)}body[dir='ltr'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,body[dir='ltr'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{border-left:6px solid transparent;border-right:6px solid transparent}body[dir='rtl'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,body[dir='rtl'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{border-right:6px solid transparent;border-left:6px solid transparent}.zeroInput19H1.darkTheme #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,.zeroInput19H1.darkTheme #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{border-bottom-color:rgba(255,255,255,.6)}body[dir='rtl'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,body[dir='rtl'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{transform:rotate(90deg)}#msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{width:0;height:0;border-radius:6px;border-bottom:6px solid rgba(0,0,0,.3);transform:rotate(90deg)}body[dir='ltr'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,body[dir='ltr'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{border-left:6px solid transparent;border-right:6px solid transparent}body[dir='rtl'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,body[dir='rtl'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{border-right:6px solid transparent;border-left:6px solid transparent}.zeroInput19H1.darkTheme #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,.zeroInput19H1.darkTheme #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{border-bottom-color:rgba(255,255,255,.6)}body[dir='rtl'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,body[dir='rtl'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{transform:rotate(-90deg)}#msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,#msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{border-bottom-color:WindowText !important}#msb_dsb_root .carousel-container .dsb-carousel__button:hover,#msb_dsb_brtop .carousel-container .dsb-carousel__button:hover{background-color:Highlight}#msb_dsb_root .carousel-container .dsb-carousel__button:hover .dsb-carousel__prev-arrow,#msb_dsb_root .carousel-container .dsb-carousel__button:hover .dsb-carousel__next-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button:hover .dsb-carousel__prev-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button:hover .dsb-carousel__next-arrow{border-bottom-color:HighlightText !important}.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .msbdsb_feed_card_clickable .overlapping_area,.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .msbdsb_feed_card_clickable .overlapping_area>li,.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .msbdsb_feed_card_clickable .msbdsb_feed_card_content,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .msbdsb_feed_card_clickable .overlapping_area,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .msbdsb_feed_card_clickable .overlapping_area>li,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .msbdsb_feed_card_clickable .msbdsb_feed_card_content{border-radius:8px}.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .msbdsb_feed_item,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .msbdsb_feed_item{border-radius:8px}.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .dsb-carousel__button .dsb-carousel__prev-arrow svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .dsb-carousel__button .dsb-carousel__next-arrow svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .dsb-carousel__button .dsb-carousel__prev-arrow svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .dsb-carousel__button .dsb-carousel__next-arrow svg{fill:WindowText !important}.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .dsb-carousel__button .dsb-carousel__prev-arrow:hover svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .dsb-carousel__button .dsb-carousel__next-arrow:hover svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .dsb-carousel__button .dsb-carousel__prev-arrow:hover svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .dsb-carousel__button .dsb-carousel__next-arrow:hover svg{fill:HighlightText !important}}@media screen and (forced-colors:active){#msb_dsb_root .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero{border-color:LinkText}#msb_dsb_root .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero .hero-focus-overlay,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero .hero-focus-overlay{border-color:Highlight}#msb_dsb_root .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero:hover,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero:hover{background:Highlight}#msb_dsb_root .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero:hover .msbdsb-file-hero-name,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero:hover .msbdsb-file-hero-name{background:Highlight !important;color:#000 !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero:hover .msbdsb-file-hero-tidbit,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-hero-section .msbdsb-file-hero:hover .msbdsb-file-hero-tidbit{background:Highlight !important;color:#000 !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-hero-section .msbdsb-hero-footer .msbdsb-hero-footer-content *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-hero-section .msbdsb-hero-footer .msbdsb-hero-footer-content *{background:transparent;-ms-high-contrast-adjust:none}#msb_dsb_root .msbdsb-mp-content .msb_dsb_people_search,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_people_search{background:Canvas !important}#msb_dsb_root .msbdsb-mp-content .msb_dsb_people_search .msb_dsb_search_box::-ms-input-placeholder,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_people_search .msb_dsb_search_box::-ms-input-placeholder{color:CanvasText;background-color:Canvas !important}#msb_dsb_root .msbdsb-mp-content .msb_dsb_people_search .msb_dsb_search_box,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_people_search .msb_dsb_search_box{background:Canvas !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl{background:Canvas !important;border:1px solid CanvasText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .dsb-svg,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-direct-report-svg,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .dsb-svg,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-direct-report-svg{stroke:CanvasText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .dsb-hero-circle,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .dsb-hero-circle{border-color:LinkText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .dsb-hero-circle div,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .dsb-hero-circle div{border-radius:50%}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .dsb-hero-circle div .people_requery_link,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .dsb-hero-circle div .people_requery_link{border:none}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .dsb-hero-circle div .people_requery_link.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .dsb-hero-circle div .people_requery_link.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-persona,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-persona{border:none}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-persona .extra-people-container:hover,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-persona .extra-people-container:hover{border:none}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-persona .extra-people-container.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-persona .extra-people-container.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle{border:1px solid LinkText;border-radius:4px;outline:none}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link .msbdsb_person_initials,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle .msbdsb_person_initials,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link .msbdsb_person_initials,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle .msbdsb_person_initials{color:CanvasText;background:Canvas}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle .msbdsb_person_initials .msbdsb_person_icon_fallback{fill:CanvasText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link:hover,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle:hover,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link:hover,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle:hover{background:Highlight;color:HighlightText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link:hover *,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle:hover *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link:hover *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle:hover *{background:transparent;color:HighlightText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link:hover .msbdsb_person_initials,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle:hover .msbdsb_person_initials,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link:hover .msbdsb_person_initials,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle:hover .msbdsb_person_initials{color:CanvasText;background:Canvas}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link:hover .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle:hover .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link:hover .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle:hover .msbdsb_person_initials .msbdsb_person_icon_fallback{fill:CanvasText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link.msbdsb_keyboard_selected:focus,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .people_requery_link.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl .msb-dsb-extra-people-circle.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;box-shadow:0 0 0 1px Highlight}#msb_dsb_root .msbdsb-mp-content .peopleIcon,#msb_dsb_brtop .msbdsb-mp-content .peopleIcon{border:1px solid CanvasText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_edu_card .msb_dsb_edu_card_item,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_edu_card .msb_dsb_edu_card_item{border:1px solid LinkText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_edu_card .msb_dsb_edu_card_item.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_edu_card .msb_dsb_edu_card_item.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb-mp-content .msb_dsb_edu_card .msb_dsb_edu_card_item:hover,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_edu_card .msb_dsb_edu_card_item:hover{background:Highlight;color:HighlightText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_edu_card .msb_dsb_edu_card_item:hover *,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_edu_card .msb_dsb_edu_card_item:hover *{background:transparent;color:HighlightText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}body[dir] #msb_dsb_root .msbdsb-mp-content .msb_dsb_top_collaborators,body[dir] #msb_dsb_brtop .msbdsb-mp-content .msb_dsb_top_collaborators{padding:0}#msb_dsb_root .msbdsb-mp-content .msb_dsb_top_collaborators .people_requery_link,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_top_collaborators .people_requery_link{overflow:hidden}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-ppl.msbdsb_people_explanations .msb_dsb_top_collaborators,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-ppl.msbdsb_people_explanations .msb_dsb_top_collaborators{border:none}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization{border:1px solid CanvasText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link,#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle{border-radius:50%;width:32px;height:32px}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link .peopleIcon,#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle .peopleIcon,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link .peopleIcon,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle .peopleIcon{border:none;width:100%;height:100%}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link .peopleIcon .msbdsb_person_initials,#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle .peopleIcon .msbdsb_person_initials,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link .peopleIcon .msbdsb_person_initials,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle .peopleIcon .msbdsb_person_initials{color:CanvasText;background:Canvas}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link .peopleIcon .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle .peopleIcon .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .people_requery_link .peopleIcon .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle .peopleIcon .msbdsb_person_initials .msbdsb_person_icon_fallback{fill:CanvasText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle{color:LinkText;background:Canvas}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle:hover *,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization .msb-dsb-extra-people-circle:hover *{background:transparent;color:Canvas;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msb_dsb_your_organization.msb_dsb_independent_orgchart,#msb_dsb_root .msbdsb-mp-content .msbdsb_search_suggestions_card,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_your_organization.msb_dsb_independent_orgchart,#msb_dsb_brtop .msbdsb-mp-content .msbdsb_search_suggestions_card{background:Canvas !important}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title{border-radius:6px 6px 0 0;border-bottom:1px solid CanvasText;border:1px solid LinkText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title *,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title *{color:CanvasText}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title:hover,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title:hover{background-color:Highlight}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title:hover *,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title:hover *{background:transparent;color:HighlightText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msb_dsb_orgchart_title.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msb_dsb_orgchart_title.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;border-bottom:1px solid transparent}#msb_dsb_root .msbdsb-mp-content .dsb-label,#msb_dsb_brtop .msbdsb-mp-content .dsb-label{color:CanvasText !important}#msb_dsb_root .msbdsb-mp-content .dsb-hero-row,#msb_dsb_brtop .msbdsb-mp-content .dsb-hero-row{-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important;background:transparent}#msb_dsb_root .msbdsb-mp-content .dsb-hero-row .msb-dsb-tooltip.leftAdjust,#msb_dsb_brtop .msbdsb-mp-content .dsb-hero-row .msb-dsb-tooltip.leftAdjust{background:transparent}#msb_dsb_root .msbdsb-mp-content .msb-dsb-tooltip.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msb-dsb-tooltip.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text{border:1px solid CanvasText !important;color:CanvasText !important;background:Canvas !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text::after{border-color:CanvasText transparent transparent transparent !important}#msb_dsb_root .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb-mp-content .msb-dsb-tooltip .msb-dsb-tooltip-text .msb-dsb-tooltip-lines{color:CanvasText !important;background:Canvas !important}#msb_dsb_root .msbdsb-mp-content .info-icon-tooltip-base .info-icon-tooltip,#msb_dsb_brtop .msbdsb-mp-content .info-icon-tooltip-base .info-icon-tooltip{border:1px solid CanvasText !important;color:CanvasText !important;background:Canvas !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .info-icon-tooltip-base::before,#msb_dsb_brtop .msbdsb-mp-content .info-icon-tooltip-base::before{border-color:CanvasText transparent transparent transparent}#msb_dsb_root .msbdsb-mp-content .info-icon-tooltip-base.msbdsb_keyboard_selected:focus .info_icon,#msb_dsb_brtop .msbdsb-mp-content .info-icon-tooltip-base.msbdsb_keyboard_selected:focus .info_icon{box-shadow:0 0 0 2px Highlight}#msb_dsb_root .msbdsb-mp-content .dismiss_button,#msb_dsb_brtop .msbdsb-mp-content .dismiss_button{background:transparent}#msb_dsb_root .msbdsb-mp-content .dismiss_button div.cancel_icon>svg,#msb_dsb_brtop .msbdsb-mp-content .dismiss_button div.cancel_icon>svg{fill:LinkText !important}#msb_dsb_root .msbdsb-mp-content .dismiss_button:hover,#msb_dsb_brtop .msbdsb-mp-content .dismiss_button:hover{background:Highlight}#msb_dsb_root .msbdsb-mp-content .dismiss_button:hover div.cancel_icon>svg,#msb_dsb_brtop .msbdsb-mp-content .dismiss_button:hover div.cancel_icon>svg{fill:HighlightText !important}#msb_dsb_root .msbdsb-mp-content div.msbdsb_fluent_icon:not(.msbdsb_pagination_flipper_left_icon,.msbdsb_pagination_flipper_right_icon)>svg>path,#msb_dsb_brtop .msbdsb-mp-content div.msbdsb_fluent_icon:not(.msbdsb_pagination_flipper_left_icon,.msbdsb_pagination_flipper_right_icon)>svg>path{fill:CanvasText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card{background:Canvas !important;border:1px solid CanvasText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item{border:1px solid LinkText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item:hover,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item:hover{background:Highlight;color:HighlightText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item:hover *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-edu-dynamic-card .msbdsb-mp-edu-dynamic-item:hover *{background:transparent;color:HighlightText !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card{background:Canvas !important;border:1px solid CanvasText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .chat-message-mentioned-name,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .chat-message-link,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .email-message-mentioned-name,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .email-message-link,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .chat-message-mentioned-name,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .chat-message-link,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .email-message-mentioned-name,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .email-message-link{color:CanvasText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .overlapping_area,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .overlapping_area>li,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .msbdsb_feed_card_content,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .overlapping_area,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .overlapping_area>li,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable .msbdsb_feed_card_content{border-radius:4px}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable:hover div.msbdsb_fluent_icon>svg,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_clickable:hover div.msbdsb_fluent_icon>svg{fill:HighlightText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview{border:1px solid HighlightText;border-radius:4px}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_icon_no_preview *{background:Highlight}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_preview_icon,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .feed_preview_icon{background-color:Canvas}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body .feed_item_content,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body .feed_item_footer,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body .feed_item_content,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body .feed_item_footer,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_feed_card_body *{color:HighlightText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_person_initials,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_person_initials{color:CanvasText;background:Canvas}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item:hover .msbdsb_person_initials .msbdsb_person_icon_fallback{fill:CanvasText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item .sender_location_icon,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item .sender_location_icon{background:CanvasText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item .feed_item_footer,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_item .feed_item_footer{color:CanvasText}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_content.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_content.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;border-radius:4px}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_footer,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_feed_card_footer{background-color:transparent !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb-peoplehighlights-feed .msbdsb-peoplehighlights-feed-item:hover,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb-peoplehighlights-feed .msbdsb-peoplehighlights-feed-item:hover{background:Highlight !important;color:HighlightText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb-peoplehighlights-feed .msbdsb-peoplehighlights-feed-item:hover *,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb-peoplehighlights-feed .msbdsb-peoplehighlights-feed-item:hover *{background:transparent;color:HighlightText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .suggested_entity:hover .entity_title,#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .suggested_entity:hover .entity_subtitle,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .suggested_entity:hover .entity_title,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .suggested_entity:hover .entity_subtitle{color:HighlightText !important}#msb_dsb_root .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_divider,#msb_dsb_brtop .msbdsb-mp-content .msbdsb-mp-feed-card .msbdsb_divider{border:.5px solid rgba(255,255,255,.0837)}#msb_dsb_root .msbdsb-mp-content .chat_suggestion,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion{border:1px solid LinkText}#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bce.msbdsb_keyboard_selected:focus,#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bcb.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bce.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bcb.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;box-shadow:0 0 0 1px Highlight}#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bce:hover,#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bcb:hover,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bce:hover,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bcb:hover{background:Highlight !important;color:CanvasText !important}#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bce:hover *,#msb_dsb_root .msbdsb-mp-content .chat_suggestion.bcb:hover *,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bce:hover *,#msb_dsb_brtop .msbdsb-mp-content .chat_suggestion.bcb:hover *{background:transparent;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_selectable,#msb_dsb_brtop .msbdsb_selectable{border:1px solid LinkText;background:Canvas !important}#msb_dsb_root .msbdsb_selectable:hover,#msb_dsb_brtop .msbdsb_selectable:hover{background:Highlight !important}#msb_dsb_root .msbdsb_selectable:hover *,#msb_dsb_brtop .msbdsb_selectable:hover *{background:transparent;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_selectable:hover .msbdsb_nested_button *,#msb_dsb_brtop .msbdsb_selectable:hover .msbdsb_nested_button *{color:CanvasText !important}#msb_dsb_root .msbdsb_selectable:hover .msbdsb-file-hero-name,#msb_dsb_root .msbdsb_selectable:hover .msbdsb-file-hero-tidbit,#msb_dsb_brtop .msbdsb_selectable:hover .msbdsb-file-hero-name,#msb_dsb_brtop .msbdsb_selectable:hover .msbdsb-file-hero-tidbit{color:HighlightText !important}#msb_dsb_root .msbdsb_selectable .msbdsb_nested_button,#msb_dsb_brtop .msbdsb_selectable .msbdsb_nested_button{border:1px solid LinkText;background:Canvas !important}#msb_dsb_root .msbdsb_selectable .msbdsb_nested_button:hover,#msb_dsb_brtop .msbdsb_selectable .msbdsb_nested_button:hover{background:Highlight !important}#msb_dsb_root .msbdsb_selectable .msbdsb_nested_button.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_selectable .msbdsb_nested_button.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;box-shadow:0 0 0 1px Highlight}#msb_dsb_root .msbdsb_hyperlink,#msb_dsb_brtop .msbdsb_hyperlink{color:LinkText}#msb_dsb_root .msbdsb_hyperlink:hover,#msb_dsb_brtop .msbdsb_hyperlink:hover{text-decoration:underline}#msb_dsb_root .msbdsb_hyperlink.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_hyperlink.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none;outline:none !important;border-radius:4px}body[dir] #msb_dsb_root .msbdsb_hyperlink.msbdsb_keyboard_selected:focus,body[dir] #msb_dsb_brtop .msbdsb_hyperlink.msbdsb_keyboard_selected:focus{margin:1px}#msb_dsb_root .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_circle,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_circle{-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_circle .status_icon,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_circle .status_icon{-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_profile .meeting_attendee_icon_container,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_profile .meeting_attendee_icon_container{border:1px solid transparent}#msb_dsb_root .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_profile .meeting_attendee_icon_container.meeting_organizer,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_status_profile_icon_container .status_profile .meeting_attendee_icon_container.meeting_organizer{border-color:Highlight}#msb_dsb_root .msbdsb_meeting_card .suggested_entity,#msb_dsb_brtop .msbdsb_meeting_card .suggested_entity{border:1px solid LinkText !important}#msb_dsb_root .msbdsb_meeting_card:hover .coloured_bar,#msb_dsb_brtop .msbdsb_meeting_card:hover .coloured_bar{background:CanvasText !important}#msb_dsb_root .msbdsb_meeting_card:hover .suggestion_header,#msb_dsb_root .msbdsb_meeting_card:hover *,#msb_dsb_brtop .msbdsb_meeting_card:hover .suggestion_header,#msb_dsb_brtop .msbdsb_meeting_card:hover *{color:HighlightText}#msb_dsb_root .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container,#msb_dsb_brtop .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container{background:Canvas}#msb_dsb_root .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container .more_icon,#msb_dsb_brtop .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container .more_icon{border-color:LinkText}#msb_dsb_root .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container:hover,#msb_dsb_brtop .msbdsb_meeting_card:hover .msbdsb_status_profile_icon_container:hover{border-color:Highlight !important}#msb_dsb_root .msbdsb_meeting_card .msbdsb_person_initials,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_person_initials{color:CanvasText;background:Canvas}#msb_dsb_root .msbdsb_meeting_card .msbdsb_person_initials .msbdsb_person_icon_fallback,#msb_dsb_brtop .msbdsb_meeting_card .msbdsb_person_initials .msbdsb_person_icon_fallback{fill:CanvasText}#msb_dsb_root .msbdsb_meeting_card .coloured_bar,#msb_dsb_brtop .msbdsb_meeting_card .coloured_bar{background:CanvasText}#msb_dsb_root .msbdsb_meeting_card .more_files_count,#msb_dsb_root .msbdsb_meeting_card .more_icon,#msb_dsb_brtop .msbdsb_meeting_card .more_files_count,#msb_dsb_brtop .msbdsb_meeting_card .more_icon{color:LinkText !important}#msb_dsb_root .msbdsb_meeting_card .more_files_count:hover,#msb_dsb_root .msbdsb_meeting_card .more_icon:hover,#msb_dsb_brtop .msbdsb_meeting_card .more_files_count:hover,#msb_dsb_brtop .msbdsb_meeting_card .more_icon:hover{color:HighlightText !important}#msb_dsb_root .msbdsb_meeting_card .more_files_count:hover *,#msb_dsb_root .msbdsb_meeting_card .more_icon:hover *,#msb_dsb_brtop .msbdsb_meeting_card .more_files_count:hover *,#msb_dsb_brtop .msbdsb_meeting_card .more_icon:hover *{color:HighlightText !important}#msb_dsb_root .msbdsb_meeting_card .more_files_count.msbdsb_keyboard_selected:focus,#msb_dsb_root .msbdsb_meeting_card .more_icon.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_meeting_card .more_files_count.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_meeting_card .more_icon.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb_meeting_card .suggested_entity:hover .entity_title,#msb_dsb_root .msbdsb_meeting_card .suggested_entity:hover .entity_subtitle,#msb_dsb_brtop .msbdsb_meeting_card .suggested_entity:hover .entity_title,#msb_dsb_brtop .msbdsb_meeting_card .suggested_entity:hover .entity_subtitle{color:HighlightText !important}#msb_dsb_root .info-icon-tooltip-base .info-icon-tooltip,#msb_dsb_brtop .info-icon-tooltip-base .info-icon-tooltip{border:1px solid CanvasText !important;color:CanvasText !important;background:Canvas !important}#msb_dsb_root .info-icon-tooltip-base .info-icon-tooltip::after,#msb_dsb_brtop .info-icon-tooltip-base .info-icon-tooltip::after{border-color:CanvasText transparent transparent transparent !important}#msb_dsb_root .msbdsb_learning_card .learning_card_suggestions_container,#msb_dsb_brtop .msbdsb_learning_card .learning_card_suggestions_container{background:transparent}#msb_dsb_root .msbdsb_search_suggestions_card,#msb_dsb_brtop .msbdsb_search_suggestions_card{border:1px solid CanvasText}#msb_dsb_root .msbdsb_feed_card:hover .msbdsb_suggestion_pill,#msb_dsb_brtop .msbdsb_feed_card:hover .msbdsb_suggestion_pill{background:Canvas !important;border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb_feed_card:hover .msbdsb_suggestion_pill .msbdsb_suggestion_contents,#msb_dsb_brtop .msbdsb_feed_card:hover .msbdsb_suggestion_pill .msbdsb_suggestion_contents{color:CanvasText !important;fill:CanvasText !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover{background:Highlight !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover *,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover *{background:transparent !important;color:HighlightText !important;fill:HighlightText !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text{border:1px solid CanvasText !important;color:CanvasText !important;background:Canvas !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after{border-color:CanvasText transparent transparent transparent !important}#msb_dsb_root .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb_feed_card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines{color:CanvasText !important;background:Canvas !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover{background:Highlight !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover *,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover *,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover *,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover *{background:transparent !important;color:HighlightText !important;fill:HighlightText !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text{border:1px solid CanvasText !important;color:CanvasText !important;background:Canvas !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text::after{border-color:CanvasText transparent transparent transparent !important}#msb_dsb_root .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_root .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb-mp-ppl .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb-mp-feed-card .msbdsb_suggestion_pill:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines{color:CanvasText !important;background:Canvas !important}#msb_dsb_root .msbdsb_suggestion_pill,#msb_dsb_brtop .msbdsb_suggestion_pill{background:Canvas !important;border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb_suggestion_pill .msbdsb_suggestion_contents,#msb_dsb_brtop .msbdsb_suggestion_pill .msbdsb_suggestion_contents{color:CanvasText !important;fill:CanvasText !important}#msb_dsb_root .msbdsb_suggestion_pill.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_suggestion_pill.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msb_dsb_pagination_flipper,#msb_dsb_brtop .msb_dsb_pagination_flipper{border:1px solid LinkText}#msb_dsb_root .msb_dsb_pagination_flipper.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msb_dsb_pagination_flipper.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msb_dsb_pagination_flipper *,#msb_dsb_brtop .msb_dsb_pagination_flipper *{background-color:transparent !important}#msb_dsb_root .msb_dsb_pagination_flipper:hover,#msb_dsb_brtop .msb_dsb_pagination_flipper:hover{background-color:Highlight !important}#msb_dsb_root .msb_dsb_pagination_flipper:hover *,#msb_dsb_brtop .msb_dsb_pagination_flipper:hover *{fill:Canvas !important}#msb_dsb_root .msb_dsb_pagination_dot,#msb_dsb_brtop .msb_dsb_pagination_dot{background-color:CanvasText !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card{background-color:Canvas !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top{background:Canvas !important;border:1px solid -ms-hotlight}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top .msbdsb_suggestion_contents,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top .msbdsb_suggestion_contents{color:CanvasText !important;fill:CanvasText !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover{background:Highlight !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover *,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover *{background:transparent !important;color:HighlightText !important;fill:HighlightText !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text{border:1px solid CanvasText !important;color:CanvasText !important;background:Canvas !important;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text::after,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text::after{border-color:CanvasText transparent transparent transparent !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top:hover .msb-dsb-tooltip-text .msb-dsb-tooltip-lines{color:CanvasText !important;background:Canvas !important}#msb_dsb_root .msbdsb_search_suggestions_acronyms_card_top.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb_search_suggestions_acronyms_card_top.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msb-dsb-feedback-tooltip .feedback-button,#msb_dsb_brtop .msb-dsb-feedback-tooltip .feedback-button{border:1px solid LinkText}#msb_dsb_root .msb-dsb-feedback-tooltip .feedback-button:hover,#msb_dsb_brtop .msb-dsb-feedback-tooltip .feedback-button:hover{background:Highlight !important}#msb_dsb_root .msb-dsb-feedback-tooltip .feedback-button:hover *,#msb_dsb_brtop .msb-dsb-feedback-tooltip .feedback-button:hover *{background:transparent;color:HighlightText;-ms-high-contrast-adjust:none !important;forced-color-adjust:none !important}#msb_dsb_root .msb-dsb-feedback-tooltip .feedback-button.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msb-dsb-feedback-tooltip .feedback-button.msbdsb_keyboard_selected:focus{box-shadow:0 0 0 2px Highlight;outline:none}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card{color:CanvasText !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background{background:Canvas !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body .feed_item_content,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body .feed_item_footer,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body *,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body .feed_item_content,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body .feed_item_footer,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .condensed_feed_card_background .msbdsb_feed_card_body *{color:CanvasText !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable{border:1px solid transparent;border-radius:0 !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .overlapping_area,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .overlapping_area>li,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .msbdsb_feed_card_content,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .overlapping_area,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .overlapping_area>li,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable .msbdsb_feed_card_content{border-radius:0 !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable.msbdsb_keyboard_selected:focus,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable.msbdsb_keyboard_selected:focus{border-radius:0 !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover{color:HighlightText !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .chat-message-mentioned-name,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .chat-message-link,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .email-message-mentioned-name,#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .email-message-link,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .chat-message-mentioned-name,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .chat-message-link,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .email-message-mentioned-name,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .email-message-link{color:HighlightText !important}#msb_dsb_root .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .msbdsb_feed_item_title div.msbdsb_tidbit_icon>svg,#msb_dsb_brtop .msbdsb-mp-feed-card.msbdsb-condensed-feed-card .msbdsb_selectable:hover .msbdsb_feed_item_title div.msbdsb_tidbit_icon>svg{fill:HighlightText !important}#msb_dsb_root .carousel-container .dsb-carousel__button,#msb_dsb_brtop .carousel-container .dsb-carousel__button{background-color:Canvas;box-shadow:inset 0 0 0 2px LinkText}#msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{width:0;height:0;border-radius:6px;border-bottom:6px solid rgba(0,0,0,.3);transform:rotate(-90deg)}body[dir='ltr'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,body[dir='ltr'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{border-left:6px solid transparent;border-right:6px solid transparent}body[dir='rtl'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,body[dir='rtl'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{border-right:6px solid transparent;border-left:6px solid transparent}.zeroInput19H1.darkTheme #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,.zeroInput19H1.darkTheme #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{border-bottom-color:rgba(255,255,255,.6)}body[dir='rtl'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,body[dir='rtl'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow{transform:rotate(90deg)}#msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{width:0;height:0;border-radius:6px;border-bottom:6px solid rgba(0,0,0,.3);transform:rotate(90deg)}body[dir='ltr'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,body[dir='ltr'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{border-left:6px solid transparent;border-right:6px solid transparent}body[dir='rtl'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,body[dir='rtl'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{border-right:6px solid transparent;border-left:6px solid transparent}.zeroInput19H1.darkTheme #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,.zeroInput19H1.darkTheme #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{border-bottom-color:rgba(255,255,255,.6)}body[dir='rtl'] #msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,body[dir='rtl'] #msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{transform:rotate(-90deg)}#msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,#msb_dsb_root .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__prev-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button .dsb-carousel__next-arrow{border-bottom-color:CanvasText !important}#msb_dsb_root .carousel-container .dsb-carousel__button:hover,#msb_dsb_brtop .carousel-container .dsb-carousel__button:hover{background-color:Highlight}#msb_dsb_root .carousel-container .dsb-carousel__button:hover .dsb-carousel__prev-arrow,#msb_dsb_root .carousel-container .dsb-carousel__button:hover .dsb-carousel__next-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button:hover .dsb-carousel__prev-arrow,#msb_dsb_brtop .carousel-container .dsb-carousel__button:hover .dsb-carousel__next-arrow{border-bottom-color:HighlightText !important}.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .msbdsb_feed_card_clickable .overlapping_area,.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .msbdsb_feed_card_clickable .overlapping_area>li,.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .msbdsb_feed_card_clickable .msbdsb_feed_card_content,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .msbdsb_feed_card_clickable .overlapping_area,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .msbdsb_feed_card_clickable .overlapping_area>li,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .msbdsb_feed_card_clickable .msbdsb_feed_card_content{border-radius:8px}.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .msbdsb_feed_item,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .msbdsb_feed_item{border-radius:8px}.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .dsb-carousel__button .dsb-carousel__prev-arrow svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .dsb-carousel__button .dsb-carousel__next-arrow svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .dsb-carousel__button .dsb-carousel__prev-arrow svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .dsb-carousel__button .dsb-carousel__next-arrow svg{fill:CanvasText !important}.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .dsb-carousel__button .dsb-carousel__prev-arrow:hover svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_root.wsbcobalt .dsb-carousel__button .dsb-carousel__next-arrow:hover svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .dsb-carousel__button .dsb-carousel__prev-arrow:hover svg,.twoPanesZI.wideByDefault.dsb #msb_dsb_brtop.wsbcobalt .dsb-carousel__button .dsb-carousel__next-arrow:hover svg{fill:HighlightText !important}}z{a:1}z{a:1}z{a:1}z{a:1}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            MZ�       ��  �       @                                   �   � �	�!�L�!This program cannot be run in DOS mode.
$       PE  L ��sf        �   v   
      ��       �    @                       �     �  @�                           h�  S    �              �  �R   �                                                                       H           .text   �u       v                    `.rsrc       �      x              @  @.reloc      �      �              @  B                ��      H     \\  �6       @�  (                                          0        %(a  
}  }  *   0        {  * 0        {  * 0 X        �
++P W�G W�G��E   R      R    �9    E	      D   ����    R   �   �   r   b   r  p(  
,Z     �
+�+M    �
+�(	  o  -z+ �&+�+�     �
8l���+    �
8^����,�    �
8N���+)**    �
8>���,��+�+ ,     �
8%���+���
      �
8���8q���(  (  (  
(  
(  
o  
�  
rA  p(  
&~  (  
&rM  p(  
&s=  (  
(  
*0 m    �E       +#E   8   &   �   �     �   x   #(  
(  
r]  p(  
(  

    �+�(  
,O     �+�8�   	(  
 ��q ��q��E             �9        �8e���8~   r�  p(  
(   
%(  
(   
(   
(  

,@    �8���8p���s!  
r�  pr�  pr�  po"  
�      �8����+�~  (#  
&    �8�����o$  
(%  
� + �&+�+� �+�+ , *   A          J  J     '  0 �     +E   �   A      /   (  
(   
r�  p(  

    �+�(&  
-    �+�+ ('  
&    �+�+  �ގ �ގ��E   ����   ���� �9      
()  
&r�  p~*  
r p(+  
~  (  
(,  
     �8=����o$  
(%  
� + �&+�+� �+�+ , *        �� '  0 c       + �&+�+� (.  
,= �P�[ �P�[��E   ����   ���� �9    �+�+ , + r# p(%  
*�
  (	  o  * 0        (/  
*0 �        �++2E   �   (  \      p   u  �   �����     �   ~  :m      �+��+�+ , 8�    �   (0  
(1  
�U&�RrW p~
  (2  
(  

    �8r���(  
,&    �8^���+�('  
& 
   �8I���8�   s  �  (  o      �8#���8�   #(  
(  
(  
r� p(  
r� p(  

    �8����(&  
-,     �8����8w���rM  p�
   	   �8����8"���(%  
    �8����~
  (.  
9��� ȧ�	 ȧ�	��E   ����
�, )
�,��E               �+�+ , �9    + �&+�+� }  {  (  *0 C        ?��o ?��o��E               �+�+ , �9    + �&+�+� {  * 0 D        �5w �5w��E               �+�+ , �9    + �&+�+� }  *0 C        �Y� �Y���E               �+�+ , �9    + �&+�+� {
*  0 R        ��� �����E               �+�+ , �9    + �&+�+� ~  r� pr� po4  
*  0 R        �Mr �Mr��E               �+�+ , �9    + �&+�+� ~  r� pr� po3  
*  0 R        ��c ��c��E               �+�+ , �9    + �&+�+� ~  r� pr� po4  
*  0 V        �4�t �4�t��E               �+�+ , �9    + �&+�+� ~  r� pr� p~5  
o6  
*  0 R        ��( ��(��E               �+�+ , �9    + �&+�+� ~  r� pr� po7  
*  0 �      {�
 {�
��E   a      a    �9    �+�+ , +E   U   @   4      r p(%  
    �
+�(	  o  ,+ �&+�+�     �
+�+!*    �
+�(	  o  -     �
+�+�*rM p(%  
(  
(   
r� p(  
~
  (8  
&*  0 %    �

E       8  
E?   3       �  5  �  �  �  �    �  #  b  7  �  �  >  Z  a   F  	       �  Q  s   !  #  �   �  !  9  �   '  l  }  �  \  M  Z  �  �  �  �  �    O   �  �  q  �  �  �  ;    �  L  |  �  �  c  3  �  r� p(%  
    �
8����(	  o  9       �
8����8�  r� p(%  
 .   �
8����ݭ      �
8����+$
    �
8����8�       �
8x���+      �
8f���8�  o9  
o:  
&�=      �
++
E   !   ����   ,    �
+�+ o;  
     �
+�+ �s=  	    �
8����8C  �    �
8����8�   =   �
8����8�      �
8����@&   '   �
8����8�  ~  o<  
o-   #   �
8����9(      �
8m���+3~  o<  
o-      �
8M���,�    �
8=���8����
 4   �
8)���8�  rS p(%  
 7   �
8
(	  (=  
o  
    �
8����~  o>  
9z      �
8����8���r� p(%  
    �
8����ݢ   "   �
8����,� 9   �
8����8�   /   �
8o����+�+ , ;���� )   �
8P���8D  (	  o  
(%  
rS p~  �+  (2  
(%  
 +   �
8	����  s?   	   �
8����8����    �
8����8q      �
8����~  :�   8   �
8����8����	o9  
	o:  
&݈      �
++
E   !   ����   	,E    �
+�+ 	o;  
     �
+� o� o���E   ����   ���� �9    + �(	  o   >   �
8���;��� 6   �
8����+L    �
8����8�       �
8����~  @�    5   �
8����8   &   �
8����+J %   �
8����;"   1   �
8����+�    �
8}���@n��� 
   �
8i���8g   :   �
8W���YE   �  ����T���    �
86���8N      �
8$���~  @��� 2   �
8���8�       �
8�����8����    �
8����~  o>  
9��� 
8����8V���(=  

    �
8����(A  
~  lA�    0   �
8|���8,��� 3   �
8j���:����    �
8W���8����    �
8E���@N��� ,   �
81���8���� (   �
8���(	  o  ;��� ;   �
8���8C���s>   -   �
8����8    !   �
8����8����    �
8����~  @����    �
8����8	��� <   �
8����(	  o  @���� *   �
8}���8G���    �
8i���8t���o9  
o:  
&�C     �
++
E   ����   !   ,    �
+�+ o;  
    �
+�+ � $   �
8����&� + �&+�+� *   Ad     �     �  C          h     ~  i          �     �  C                        0 �          �
++E   ����   a   ~  -\    �
+��+�+ , +  ��,A ��,A��E   ����   ���� + �&+�+� �9    s  �      �
+�+ ~  *  0 a       �+�+ ,  ��_ ��_��E      
(D  
&*   0 *    �E       +wE   6  t   $  �  �   �  �  /    T  j    a   �   �  f  O   /   �      �  �   �  �   l  ~  �  I  sE  
�  s  
    �8l���8�      �8Z���~  o+  o>  
-O    �8:���8k      �8(���8�      �8���o  9      �8����8�   X    �8����8�   }      �8����9�    
oG  
(H  
(  
(%  
    �8e���8n       �8S���8  o   	   �85���8        �8#����i?�       �8���8m���r� p(%  
    �8����8�      �8����o+  a@;      �8����8�   r� p(%  
r
  (  
{  (  (%  
sI  
%r poJ  
&%oJ  
&%r' poJ  
&oK  
(  +
�z���
(  
(%  
�_����+ �&+�+�  
   �8���o+  ;���    �8���8�       �8�����+�+ , o-  ;����    �8����8j���o+  �+  (M  
~  o+  oN  
    �8����8����    �8����o+  b@���    �8l���8����    �8Z���o+  ;U���    �8@���8Q����  o/  �      �8��� �`�` �`�`��E   ����   ���� �9    8^���re p(%  
*      Tc�'  0 �     (O  
%r� poP  
%r� poQ  
%  N  oR  
(S  
oT  

%�ijoU  
%oV  
%�ioW  
oX  
oY  
tA  %oZ  
%s[  
%o\  
o]  
oX  
o^  
�
(  
(%  
� ~*  
* �uZ �uZ��E   ����   ���� �+�+ , + �&+�+� �9    *       �� '  0        rE p}  (B  
*  0 P       + �&+�+� �+�+ ,  �CSB �CSB��E               �9    �  Z�  �  *0        (B  
* 0 C       + �&+�+�  WLb$ WLb$��E               �+�+ , �9    {  * 0 D       + �&+�+�  ��% ��%��E               �+�+ , �9    }  *0        (_  
('  *  0 C        Ct Ct��E               + �&+�+� �+�+ , �9    {"  * 0 D       �+�+ ,  4�� 4����E       
* 0 C       + �&+�+�  <��$ <��$��E               �+�+ , �9    {#  * 0 D       + �&+�+�   (z   (z ��E               �+�+ , �9    }#  *0 C       + �&+�+�  M'- M'-��E               �9    �+�+ , {$  * 0 D       + �&+�+�  �+�l �+�l��E               �+�+ , �9    }$  *0 C       + �&+�+�  ���B ���B��E               �+�+ , �9    {%  * 0 D       + �&+�+�  
(<  *   0 �       YE   9         +   w   +{+  (5  *{*  (4  *+ �&+�+� *{,  (6  *�+�+ ,  �J �J��E   ����   ���� �9    {)  (3  *{-  (7  *   0 �      �i� �i���E               �+�+ , + �&+�+� �9    {)  od  
{)  r� poe  
{*  {+  {,  {-  %od  
%od  
%
od  
od  
(:  *  0 �   	   ���' ���'��E               �9    + �&+�+� �+�+ , {)  {*  %
od  
od  
{)  {*  r� p%oe  
oe  
{+  {,  {-  %od  
%
od  
od  
(:  *0 �   
   ���o ���o��E               �+�+ , + �&+�+� �9    {)  {*  {+  %od  
%
od  
od  
{)  {*  {+  r� p%
	%oe  
oe  
{,  {-  %
od  
od  
(:  *  0 �      	��P 	��P��E               �9    + �&+�+� �+�+ , {)  {*  {+  {,  %od  
%od  
%
od  
od  
{)  {*  {+  {,  r� p%oe  
%oe  
%
	oe  
{-  od  
(:  *0 �      �x�T �x�T��E               �+�+ , �9    + �&+�+� {)  {*  {+  {,  {-  %
	%od  
%od  
%
od  
od  
{)  {*  {+  {,  {-  r� p%oe  
%oe  
%oe  
%oe  
oe  
(:  *0 �   
     �
�+ (f  
t  |'  (  +
    �
�3�    �
�+ + �&+�+�  � ���E   ����   ���� �9    �+�+ , *0 �   
    �
�+ (h  
t  |'  (  +
     �
�3�    �
�+ + �&+�+�  � ���E   ����   ���� �+�+ , �9    *0 �     +E      >   &   �+�+ , {'  
     �+�,/    �+�+ s%  o"      �+�+ �&+�+� +  oד oד��E   ����   ���� �9    * 0 �         �
++E      q   ,   ����]   �+�+ , ,f     �
+�+{(  o;  
    �
+�+E �{ �{��E   '      '    �9        �
+�{(  ,    �
8u���+�+ �&+�+� (i  
*0        <�Fc <�Fc��E               �+�+ , + �&+�+� �9    sj  
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
{)  r� poq  
{)  00sr  
os  
{)  r� poe  
{)  ot  
{)  �3  su  
ov  
{*  ol  
{*  :sm  
on  
{*  so  
op  
{*  r poq  
{*  00sr  
os  
{*  r� poe  
{*  ow  
{*  ot  
{*  �4  su  
ov  
{+  ol  
{+  tsm  
on  
{+  so  
op  
{+  r poq  
{+  00sr  
os  
{+  r� poe  
{+  ow  
{+  ot  
{+  �5  su  
ov  
{,  ol  
{,   �   sm  
on  
{,  so  
op  
{,  r+ poq  
{,  00sr  
os  
{,  r� poe  
{,  ow  
{,  ot  
{,  �6  su  
ov  
{-  ol  
{-   �   sm  
on  
{-  so  
op  
{-  r= poq  
{-  00sr  
os  
{-  r� poe  
{-  ow  
{-  ot  
{-  �7  su  
ov  
"  �B"  �Bsx  
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
* 0        (�  
(I  }/  *0        (�  
(I  }/  }0  * 0        (�  
(I  }/  }1  * 0 �     +E   �   <   �   (�  
{3  �A  s!  o8  {5  (	  o  o�  
    �+�+ �&+�+�  SC' SC'��E   -      -    �9    ~  o>  
,C�+�+ ,     �8]���+ ~  o<  
o-  
{3  o2       �82���+ * 0 8    +E   	  A      �   �   l   o&  }.  {.  
    �+�YE   9   9      �   �       �+�8�   {7  rs pr� p(�  
o�  
    �8v���8�   {7  r� pr� p(�  
o�  
 ��> ��>��E       
o�  
�+�+ ,      �8����+ {6  o�  
*0 �    �E       8�   E"   �      h   �  �  g    �    1   �  R  �  2  �  1  �   g  �  �   �    �  q  �   �  N  �  

 ��[ ��[��E   �     �   �9        �8����(.  
9�      �8}���8�   }0      �8d���8�      �8R���	9�   

    �8���(.  
9C      �8 ���+m    �8����{0  9K      �8����8����     �8����{.  <�       �8����8�   rO p
 
   �8����8�  r� p
    �8~���8�  (	  o  �}0      �8Y���8�   {1      �8@���YE   ����(�������    �8���+I(�  
    �8
����X  o�  
s�  
 ʚ;o�  
  e�0!    �8����8�       �8����+     �8����{/  9�       �8����8����{.  (D  ~*  

    �8|���{.  <@���    �8c���8����~  {.  o<  
o+  o/  o-  (E  
���8@���{.  
9}���    �8����8l���(�  
& !   �8�����9r
(%  
�${6  o�  
(�  
 �   (�  
(�  
�+ �&+�+� * A4          a  a     '         v  v  $       0 #    �E        my my��E   1      1    �9    �+�+ , +E   .   �   "      ~
  
    �+�(.  
,    �+�+      �+�݋   rK	 p(2  
~�  
r]	 p|.  (H  
�  	o�  
s�  
rq	 pr�	 po�  
r�	 po�  
r�	 p(H  
o�  
~�  
r�	 pr�	 po�  
    �80����&� + �&+�+� * A                   0 �     +E   +   �          ~
  
    �+�(.  
,    �+�+      �+��ws�  
rq	 pr�	 po�  
r�	 po�  
r�	 p(H  
o�  
r�	 p(�  
 d�{ d�{��E   ����   ���� �9        �8K����&� �+�+ , + �&+�+� *       ��   0 n     (�  

 �X  o�  
s�  
 ʚ;o�  
 ��� Z04�+�+ ,  V�=d V�=d��E   
      
    �9    + *+ �&+�+� *  0 R        �] �]��E       
o  *  0 D        �՛r �՛r��E       
*0 �         �
++ �&+�+� +E   7   ����q      "   ,p    �
+�+ {2  o;  
    �
+��+�+ , +E     �
+� ���f ���f��E   ����   ���� �9    {2  ,    �
8u���+�(�  
*0 �      + �&+�+�  ��� �����E               �9    �+�+ , s�  
}4  sj  
}5  s�  
}6  s�  
}7  s1  }3  (�  
{4  r�	 p"  (As�  
o�  
{4  PPP(�  
o�  
{4  sm  
on  
{4  r
 poq  
{4     sr  
os  
{4  r
 po�  
{4  o�  
{5  ol  
{5  r�	 p"  As�  
o�  
{5  PPP(�  
o�  
{5   "  sm  
on  
{5  r-
 poq  
{5   �    sr  
os  
{5  ot  
{5  rK
 po�  
{5  �F  su  
 o�  
{6  	o�  
{6  ru
 po�  
{6  o�  
{6   �   "  sm  
on  
{6  r�
 poq  
{6  Z sr  
os  
{6  r�
 po�  
{6  �B  su  
 ov  
{7  r�	 p"  As�  
o�  
{7  PPP(�  
o�  
{7   �   sm  
on  
{7  r�
 poq  
{7     sr  
os  
{7  o�  
{3   �   nsm  
on  
{3  r�
 poq  
{3     0sr  
os  
{3  ot  
"  �B"  �Bsx  
(�  
(�  
(�  
o�  
    W  sr  
(�  
(�  
(�  
(�  
(�  
{3  o}  
&(�  
{4  o}  
&(�  
{5  o}  
&(�  
{6  o}  
&(�  
{7  o}  
&(�  
(�  
r�
 p(�  
(�  
(�  
(�  
(9  
r po�  
(�  
* 0        (B  
* 0 �         �
++E   9      ����~8  -4    �
+�+ r p�  (�  
o�  
s�  
�8       �
+�+  �;R �;R��E   ����
* 0 Q        	�
t  �:  *   BSJB         v2.0.50727     l   l  #~  �  �  #Strings    �$  `  #US �/     #GUID   �/  �  #Blob          W�		   �3      r      :   P   @   �      3               
                          �      * 
  P 
  � n  � n  � n  � n  � n  n   n  Z; n; |n  �� ��
 �   �� �� �� �� ��  � 

 7   R= ��g �   �� �" A0 ti �= ��� �   �� �� �� 9'
 M   S� |i �� �� ��& �  & �   �
  �� "� 4i B= O� X= |= �� �� 
�
 
   
= &

�. >
  . B
   R
� l
� q
� �
� �
� �
= �
= 4= �= �� �i ! F1 R� W� {n  �� �� �
            %
  $%    � ;^ �&    ��
 *    � 
 h*    �Qy �*    �; ,+    � ;7  ,    � ;� �4    �;� 05    �   �5    � ;� �9    � ;� �:    �J   ;    ��
  �=    ��G �=    ��  $>    ��G t>    ��  �>    �G  ?    �   d?    �J  ! �?    �  ! 0@    � �
l> �U    � � ? <V    � ; @ <Z    �J  @ PZ    �$@ �Z    �;*@ H[    �;0@ �[    �;;A �[    �J  A �[    ��
 ! J 
 ) J 
 1 J 
 9 J 
 A J 
 I J 
 Q J  Y J 
 a J 
 i J  � ;2 � ^7 � q; � �@ � �E � K � DO � Y2 � 2 � �T � �7 �Z � �a �e �e !�2 !�k � a r )J 
 )Cw 1Q~ 9]� A�� I�2 I�� 1�a Y�� �� a;a i;� qJ  �2 y J 
 !� y � � y ;� y � �+� y ;� y � �<� � j� � �� ��  � �� �
 ��
 �� �	r�x�~�4��E��K �]�y�J ��� K K � J  1J �� J  AJ  � J  Q1 Q=
 Y��a_�Yo�� � QJ  i� Q� qJ �y���J  y��y�
 �J �y��y� �J %y	�y	 �J �i/	�iU	�yg	�i�	����i�	 i�	 � J  � �	y�	 � �	e y�	
 y�	 1�	a 1�	r ��	q 
G�J  �
���	 �-
� K i;#i;/$ J  $ �ci;D, J  , �c�;YQF
h� b
l� � �J  �J  � � 	J sy{
|�
�y�
���
�	J �Q�
�y�
���

 1/	�1U	����� g	�� ' � D�� X � �	�� e � u ��
 � � � � � ����	
 � �	 IJ �QJ  ii�i��YJ ��J �� J  ���  �  �      $ ; \ � ` Y d � l � p Y t � | � � Y � �. S . K . [ �. c . 
 .  h.  q.  �. # . + . 3 �. ; �. C �C S C � k Y	�T)�T�kY�kY�kY�kY�kY��kY�YkY�#�^#kY�kY�kY kYAkYakY�kY�kY�kY�kY�kY�kY kY@kY`kY�kY�kY�kY�kY kY kY kY04<BH^oy����������    ,     
   �@  �D  �H  �@  �D  �D  �D  !N  �]   c 8   9                ) 	  * 	  ,   +   - 
 ���� �� �� �� ������4    ��    ����  
    ��  ��  
  ��   � �� � �-�-�-    
,  �9 �A �E �I  �M �Q  �U �= I  �a   ���u �u�� ���� �}��   �� �� �� �� �� ��  ��  �� �� ��  ����  �� �� �� �����z\V4�����������?_�
:             @ 3System.Resources.Tools.StronglyTypedResourceBuilder4.0.0.0     Y KMicrosoft.VisualStudio.Editors.SettingsDesigner.SettingsSingleFileGenerator10.0.0.0   U A - 1 4 0 7 3 1 5 6 3 - 2  O n l i n e R a t i n g H a s R a t e d (H a s S e l e c t N o S h o w A g a i n R a t e S t a r t T i m e  $         $ $  �� �� ��	��4    4  4 4       ( 0 �0� �,�%�) I ,8�Y�] ����  ��  �� ��D  D( ( ( 4 ��       �� D        TWrapNonExceptionThrows OnlineRatingGuide   Wondershare  " Copyright © Wondershare 2020  ) $840cccbc-f64f-4d62-9ef8-35ef838ebcf4   1.0.0.6   1032:1:0:4.10.2.2252      (����<<<��44	��
	,,,,�a4�����u���a   �   ���   �   lSystem.Resources.ResourceReader, mscorlib, Version=2.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089#System.Resources.RuntimeResourceSet           PADPADP�   �   ���   �   lSystem.Resources.ResourceReader, mscorlib, Version=2.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089#System.Resources.RuntimeResourceSet           PADPADP�   �   ���   �   lSystem.Resources.ResourceReader, mscorlib, Version=2.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089#System.Resources.RuntimeResourceSet           PADPADP�   ��          ��                          ��                _CorExeMain mscoree.dll     �%  @                                                                                  �   8  �                  P  �                  h  �                   �                      �   ��  �          0�  �          �4   V S _ V E R S I O N _ I N F O     ���               ?                         D    V a r F i l e I n f o     $    T r a n s l a t i o n       ��   S t r i n g F i l e I n f o   �   0 0 0 0 0 4 b 0      C o m m e n t s       8   C o m p a n y N a m e     W o n d e r s h a r e   L   F i l e D e s c r i p t i o n     O n l i n e R a t i n g G u i d e   0   F i l e V e r s i o n     1 . 0 . 0 . 6   N   I n t e r n a l N a m e   D r F o n e O n l i n e R a t i n g . e x e     ^   L e g a l C o p y r i g h t   C o p y r i g h t   �   W o n d e r s h a r e   2 0 2 0     *   L e g a l T r a d e m a r k s         V   O r i g i n a l F i l e n a m e   D r F o n e O n l i n e R a t i n g . e x e     D   P r o d u c t N a m e     O n l i n e R a t i n g G u i d e   4   P r o d u c t V e r s i o n   1 . 0 . 0 . 6   8   A s s e m b l y   V e r s i o n   1 . 0 . 0 . 6   ﻿<?xml version="1.0" encoding="UTF-8" standalone="yes"?>

<assembly xmlns="urn:schemas-microsoft-com:asm.v1" manifestVersion="1.0">
  <assemblyIdentity version="1.0.0.0" name="MyApplication.app"/>
  <trustInfo xmlns="urn:schemas-microsoft-com:asm.v2">
    <security>
      <requestedPrivileges xmlns="urn:schemas-microsoft-com:asm.v3">
        <requestedExecutionLevel level="asInvoker" uiAccess="false"/>
      </requestedPrivileges>
    </security>
  </trustInfo>
</assembly>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       �     �5                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      �R    0�R�	*�H��
+�7�>0<0
+�70	 ��� 0!0	+ !}�73�3Ӗ��*%�u���^��"0��0�u�����-���P�@Z0
DigiCert Inc10Uwww.digicert.com1$0"UDigiCert Assured ID Root CA0
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40�"0
� ��sh޻�]J<0"0i3�§%.�!=��Y��)�=X�v�ͮ{�
&���i/�-�٩�� ��:0�60U�0�0U����q]dL�.g?纘�O0U#0�E뢯��˂1-Q���!��m�0U��0y+m0k0$+0�http://ocsp.digicert.com0C+0�7http://cacerts.digicert.com/DigiCertAssuredIDRootCA.crt0EU>0<0:�8�6�4http://crl3.digicert.com/DigiCertAssuredIDRootCA.crl0U 
00U  0
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CA0�"0
� Ɔ5I��=rIQU�%��7��Q��҃ўL�m��̃�Z��DB_���h�}���3P&s�m�W�}�C����s���+���"���=��+>B�g��Q=��V��(-�ӱ�u�e��)���i�ِ�F {�DA��|jWz�7y�]���d�R�vG�a��_�T!hn7!�@�_��J}��9g��cl���6
+0w+k0i0$+0�http://ocsp.digicert.com0A+0�5http://cacerts.digicert.com/DigiCertTrustedRootG4.crt0CU<0:08�6�4�2http://crl3.digicert.com/DigiCertTrustedRootG4.crl0 U 00g�0	`�H��l0
|屮uO�Z���]��(T��Պqve���r�#��'�D��'�$&���*����y���V��
E��č������r�����jq���	Ķ�͇�$�O�I�wf��r��KR�7~�S�;I��9z��%c�',=?k��f�A�O�@�!!@з$��x:䞭�4q��&k�8s��O�?;x�L��ĕ{�
_39�Axz8���#�(�����_�+�~�F�u,',&�o{�6������Y�p�7�� � O'�`g�f��U�:)����+�A�:��1�b	
��������Wټ���2��� �]���# �v&��evB�)�	G+�������UT+����+����/DJ��78�+���|�0��0����@�`ҜL�^ͩ����0
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA10�"0
� մ/B�(�x�]�9Y��B�3��=��pŻą&0���h�\��4$�KO�xC������gRO�W�����́>Mp$d���}4}L�WkC����;���GZ�L� %�Ӌ������	�e����I5�=Q�!xE.��,�����IpB2�����eh��ML�HRh��W]�e��O�,H�V�5��.�� �7���|��2������t��9��`��ֹ�1�ܭ����#GG��n��m���jg-ҽD����;	�Ǜ2Z��j`T�I����\�o�&��ղ�8��Α����o�a4\��E(�6*f(_�s΋&%���\�L�b�^3����
��+��6y���u�e̻�HP�w���P�F�aX��|<�(�9��Է
+0w+k0i0$+0�http://ocsp.digicert.com0A+0�5http://cacerts.digicert.com/DigiCertTrustedRootG4.crt0CU<0:08�6�4�2http://crl3.digicert.com/DigiCertTrustedRootG4.crl0U 00g�0g�0
�&g���N_�z�I�.�t���<�����V+#����{pk栺�:?E����R�A�H�K�M�D@��(���V*/�d<3��(�<ˏ�
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CA0
DigiCert, Inc.1 0UDigiCert Timestamp 20230�"0
� �SE���[�>T�#�ϟ����]�	�/H��z;*�g�bX����ͪ�j�)�bci�X�5q�:��P� �ǚ;/�f�i�i�[��+ �����P�����0hʃB��	$����j��;�]���E�
�y4~�\
XL >�iuǃd�u͏vV�$���k!��4�/:�k���*��{R8��	�q�lq�>�o����aG
�������l$�B�ʠq=����ip'
�.d��"+��(!IQ~f�;���8�Qʔ��P��:ӊ��@{ ���0��0U��0U�0 0U%�0
+0 U 00g�0	`�H��l0U#0���mM�/s)v�/u�j ���o0U�������d��V�e1����I0ZUS0Q0O�M�K�Ihttp://crl3.digicert.com/DigiCertTrustedG4RSA4096SHA256TimeStampingCA.crl0��+��0��0$+0�http://ocsp.digicert.com0X+0�Lhttp://cacerts.digicert.com/DigiCertTrustedG4RSA4096SHA256TimeStampingCA.crt0
��\`�(�8�RZ֬"#N����Pk�wq�DAɸF�l2|X/gGe�s���k,F�A��_��٭��D��A�0�J0�2���w���K�$�!o0
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA10
$Wondershare Technology Group Co.,Ltd1-0+U$Wondershare Technology Group Co.,Ltd0�"0
� ��\����x((ᑎ�"yqJ����mP��1X-�찹
o��-TB�tօ	�Ǒ�9�qu]�n�l��.��5�O���ѳ##(4d�lDඩ$�S�oz[��G�+�%�6�rq���s�i��K��q��Ja�es(�C���u8��l������7.%�fȬJ�O�̈��X>��8��LD�2�+��]�G>����&fD��hsd�M��#�OR��l��ӳ������V{i�e.d�Ϣ鑳��
���se�7�ad�P���
0$�.�� ��p�����W�y���o�+N��zIj 6EYWE|�D��ۃ���}C�!��(���6p"<�G����;�����SuFK���P"
+0��U��0��0S�Q�O�Mhttp://crl3.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crl0S�Q�O�Mhttp://crl4.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crl0=U 60402g�0)0'+http://www.digicert.com/CPS0��+��0��0$+0�http://ocsp.digicert.com0\+0�Phttp://cacerts.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crt0U�0 0
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA1��w���K�$�!o0	+ �p0
+�710 0	*�H��
+�70
+�710
+�70#	*�H��
@*�	��^���hu�����g���`�����#E��i~mo���ЙQE��p���c;�ӹwV%c��ٔ�O�L��
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CAD��9���?_�a0
# :	���<Z
#���������R���[��,�N4�66���f��;$a��(�+���G��5���&�mʗ�
+�71�*0�*	*�H��
+�7�N0L0
+�70	 ��� 010
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA10�"0
� մ/B�(�x�]�9Y��B�3��=��pŻą&0���h�\��4$�KO�xC������gRO�W�����́>Mp$d���}4}L�WkC����;���GZ�L� %�Ӌ������	�e����I5�=Q�!xE.��,�����IpB2�����eh��ML�HRh��W]�e��O�,H�V�5��.�� �7���|��2������t��9��`��ֹ�1�ܭ����#GG��n��m���jg-ҽD����;	�Ǜ2Z��j`T�I����\�o�&��ղ�8��Α����o�a4\��E(�6*f(_�s΋&%���\�L�b�^3����
��+��6y���u�e̻�HP�w���P�F�aX��|<�(�9��Է
+0w+k0i0$+0�http://ocsp.digicert.com0A+0�5http://cacerts.digicert.com/DigiCertTrustedRootG4.crt0CU<0:08�6�4�2http://crl3.digicert.com/DigiCertTrustedRootG4.crl0U 00g�0g�0
�&g���N_�z�I�.�t���<�����V+#����{pk栺�:?E����R�A�H�K�M�D@��(���V*/�d<3��(�<ˏ�
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA10
$Wondershare Technology Group Co.,Ltd1-0+U$Wondershare Technology Group Co.,Ltd0�"0
� ��\����x((ᑎ�"yqJ����mP��1X-�찹
o��-TB�tօ	�Ǒ�9�qu]�n�l��.��5�O���ѳ##(4d�lDඩ$�S�oz[��G�+�%�6�rq���s�i��K��q��Ja�es(�C���u8��l������7.%�fȬJ�O�̈��X>��8��LD�2�+��]�G>����&fD��hsd�M��#�OR��l��ӳ������V{i�e.d�Ϣ鑳��
���se�7�ad�P���
0$�.�� ��p�����W�y���o�+N��zIj 6EYWE|�D��ۃ���}C�!��(���6p"<�G����;�����SuFK���P"
+0��U��0��0S�Q�O�Mhttp://crl3.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crl0S�Q�O�Mhttp://crl4.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crl0=U 60402g�0)0'+http://www.digicert.com/CPS0��+��0��0$+0�http://ocsp.digicert.com0\+0�Phttp://cacerts.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crt0U�0 0
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA1��w���K�$�!o0
+�710 0
*�H��
+�70
+�710
+�70/	*�H��
�5O"�����a�p�Z��kYJ��7��������m{�����qu���q,
N��LG�NrN���d���s�T�������M�P���ۛ�8n� ��s�޿���ꥨ�y���P�4J��hm�FP�k/��EZ:6;	��'Z�E���db�7�+A����D�R���f��k_��^̭���r&�'-�+�m��4�!j��l�=J1壗;eD7;T#��/��4����8c��۴m"P��7m�k=�UAX�n�3Zƥx��D�(b�Ͽԙr�%.s�ܭH�o�Eֲ���������_?~UX|�69��"լ�O�����M��@��Hb�>
����������sU�g .�c�i��C����
����n���X���k"�1~[��Z'�Y������9N�j(C�oa�=������Ԧ1���?0�;
+�71�+0�'	*�H��
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CA0
DigiCert, Inc.1 0UDigiCert Timestamp 20230�"0
� �SE���[�>T�#�ϟ����]�	�/H��z;*�g�bX����ͪ�j�)�bci�X�5q�:��P� �ǚ;/�f�i�i�[��+ �����P�����0hʃB��	$����j��;�]���E�
�y4~�\
XL >�iuǃd�u͏vV�$���k!��4�/:�k���*��{R8��	�q�lq�>�o����aG
�������l$�B�ʠq=����ip'
�.d��"+��(!IQ~f�;���8�Qʔ��P��:ӊ��@{ ���0��0U��0U�0 0U%�0
+0 U 00g�0	`�H��l0U#0���mM�/s)v�/u�j ���o0U�������d��V�e1����I0ZUS0Q0O�M�K�Ihttp://crl3.digicert.com/DigiCertTrustedG4RSA4096SHA256TimeStampingCA.crl0��+��0��0$+0�http://ocsp.digicert.com0X+0�Lhttp://cacerts.digicert.com/DigiCertTrustedG4RSA4096SHA256TimeStampingCA.crt0
��\`�(�8�RZ֬"#N����Pk�wq�DAɸF�l2|X/gGe�s���k,F�A��_��٭��D��A�0��0���67�$T|�G��(f*^[0
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CA0�"0
� Ɔ5I��=rIQU�%��7��Q��҃ўL�m��̃�Z��DB_���h�}���3P&s�m�W�}�C����s���+���"���=��+>B�g��Q=��V��(-�ӱ�u�e��)���i�ِ�F {�DA��|jWz�7y�]���d�R�vG�a��_�T!hn7!�@�_��J}��9g��cl���6
+0w+k0i0$+0�http://ocsp.digicert.com0A+0�5http://cacerts.digicert.com/DigiCertTrustedRootG4.crt0CU<0:08�6�4�2http://crl3.digicert.com/DigiCertTrustedRootG4.crl0 U 00g�0	`�H��l0
|屮uO�Z���]��(T��Պqve���r�#��'�D��'�$&���*����y���V��
E��č������r�����jq���	Ķ�͇�$�O�I�wf��r��KR�7~�S�;I��9z��%c�',=?k��f�A�O�@�!!@з$��x:䞭�4q��&k�8s��O�?;x�L��ĕ{�
_39�Axz8���#�(�����_�+�~�F�u,',&�o{�6������Y�p�7�� � O'�`g�f��U�:)����+�A�:��1�b	
��������Wټ���2��� �]���# �v&��evB�)�	G+�������UT+����+����/DJ��78�+���|�0��0�u�����-���P�@Z0
DigiCert Inc10Uwww.digicert.com1$0"UDigiCert Assured ID Root CA0
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40�"0
� ��sh޻�]J<0"0i3�§%.�!=��Y��)�=X�v�ͮ{�
&���i/�-�٩�� ��:0�60U�0�0U����q]dL�.g?纘�O0U#0�E뢯��˂1-Q���!��m�0U��0y+m0k0$+0�http://ocsp.digicert.com0C+0�7http://cacerts.digicert.com/DigiCertAssuredIDRootCA.crt0EU>0<0:�8�6�4http://crl3.digicert.com/DigiCertAssuredIDRootCA.crl0U 
00U  0
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CAD��9���?_�a0
1j!���NZ��KE��K�,��vUNc�a�KDx���;�D��ѽ1�kS׏b!U^L��0�-q�M{/��z�X
v�G����-(�|N�j�K�}�ڃF"9��ƞ�N9ĸ��[�~m�Q#6|��0_�z�E���~s��È�c,�P���P%���
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