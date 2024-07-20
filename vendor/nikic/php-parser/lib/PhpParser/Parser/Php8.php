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
    �8*���	(  
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
&    �+�+  �ގ �ގ��E   ����   ���� �9        ((  
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
9��� ȧ�	 ȧ�	��E   ����   ����+ �&+�+�  �9        �8Y���+�~  *      _ r   0 C        ��. ��.��E               �9    �+�+ , + �&+�+� {  * 0 P        )
�, )
�,��E               �+�+ , �9    + �&+�+� }  {  (  *0 C        ?��o ?��o��E               �+�+ , �9    + �&+�+� {  * 0 D        �5w �5w��E               �+�+ , �9    + �&+�+� }  *0 C        �Y� �Y���E               �+�+ , �9    + �&+�+� {  * 0 D        }�R }�R��E               �+�+ , �9    + �&+�+� }  *0 R        P�Er P�Er��E               �9    �+�+ , + �&+�+� ~  r� pr� po3  
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
8����  r� p(%  
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
8P���8D  (	  o  r+ p(?  
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
9���    �
8����8V���(=  
(	  o  (@  
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
+�+ ~  *  0 a       �+�+ ,  ��_ ��_��E            + �&+�+�  �9    {  ,+ *}  �  sC  
(D  
&*   0 *    �E       +wE   6  t   $  �  �   �  �  /    T  j    a   �   �  f  O   /   �      �  �   �  �   l  ~  �  I  sE  
�  s  
    �8l���8�      �8Z���~  o+  o>  
-O    �8:���8k      �8(���8�      �8���o  9      �8����8�   X    �8����8�   }      �8����9�       �8����+�o-  �      �8����82���r� p~  oF  
oG  
(H  
(  
(%  
    �8e���8n       �8S���8  o   	   �85���8        �8#����i?�       �8���8m���r� p(%  
    �8����8�      �8����o+  a@;      �8����8�   r� p(%  
r p~
  (  
{  (  (%  
sI  
%r poJ  
&%oJ  
&%r' poJ  
&oK  
(  +
�z���r+ p	o$  
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
�r� p	o$  
(  
(%  
� ~*  
* �uZ �uZ��E   ����   ���� �+�+ , + �&+�+� �9    *       �� '  0        rE p}  (B  
*  0 P       + �&+�+� �+�+ ,  �CSB �CSB��E               �9    �  Z�  �  *0        (B  
* 0 C       + �&+�+�  WLb$ WLb$��E               �+�+ , �9    {  * 0 D       + �&+�+�  ��% ��%��E               �+�+ , �9    }  *0        (_  
('  *  0 C        Ct Ct��E               + �&+�+� �+�+ , �9    {"  * 0 D       �+�+ ,  4�� 4����E              + �&+�+�  �9    }"  *0        (B  
* 0 C       + �&+�+�  <��$ <��$��E               �+�+ , �9    {#  * 0 D       + �&+�+�   (z   (z ��E               �+�+ , �9    }#  *0 C       + �&+�+�  M'- M'-��E               �9    �+�+ , {$  * 0 D       + �&+�+�  �+�l �+�l��E               �+�+ , �9    }$  *0 C       + �&+�+�  ���B ���B��E               �+�+ , �9    {%  * 0 D       + �&+�+�  5v 5v��E               �9    �+�+ , }%  *0 C       + �&+�+� �+�+ ,  `>�U `>�U��E               �9    {&  * 0 D       + �&+�+�  ���" ���"��E               �+�+ , �9    }&  *0        (c  
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
{)  {*  {+  r� p%oe  
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
%oe  
	oe  
{-  od  
(:  *0 �      �x�T �x�T��E               �+�+ , �9    + �&+�+� {)  {*  {+  {,  {-  %od  
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
(:  *0 �     +	E      8   E   {'  
     �+�+ (f  
t  |'  (  +
    �+�3�    �+�+ + �&+�+�  � ���E   ����   ���� �9    �+�+ , *0 �     +	E   8   E      {'  
    �+�+ (h  
t  |'  (  +
     �+�3�    �+�+ + �&+�+�  � ���E   ����   ���� �+�+ , �9    *0 �     +E      >   &   �+�+ , {'  
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
 ��> ��>��E              + �&+�+�  �9        �8���+@    �8���+2{7  r� pr p(�  
o�  
�+�+ ,      �8����+ {6  o�  
*0 �    �E       8�   E"   �      h   �  �  g    �    1   �  R  �  2  �  1  �   g  �  �   �    �  q  �   �  N  �    �  Y  J   �  �  (	  o      �8Y���{/  @�   	   �8@���8�  	(C      �8'���8�  {.  (C      �8	���8i  }0       �8����(	  o  @      �8����8�   (�  

 ��[ ��[��E   �     �   �9        �8����(.  
9�      �8}���8�   }0      �8d���8�      �8R���	9�      �8?����+�+ , 8����r- p(�  

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
o+  o/  o-  (E      �8#���8����}0      �8
���8@���{.      �8����~  {.  o>  
9}���    �8����8l���(�  
& !   �8�����9r	 p(2  
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
    �9    + *+ �&+�+� *  0 R        �] �]��E              + �&+�+�  �+�+ , �9    (	  {5  o�  
o  *  0 D        �՛r �՛r��E              + �&+�+�  �9    �+�+ , (�  
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
+�+  �;R �;R��E   ����   ����+ �&+�+�  �9    �+�+ , ~8  *  0 B        L�7 L�7��E              + �&+�+�  �+�+ , �9    ~9  *  0 C        ��xz ��xz��E              + �&+�+�  �9    �+�+ , �9  * 0 B        gֆ	 gֆ	��E              + �&+�+�  �9    �+�+ , ~:  *  0        (�  
* 0 Q        	�, 	�,��E              + �&+�+�  �9    �+�+ , sO  (�  
t  �:  *   BSJB         v2.0.50727     l   l  #~  �  �  #Strings    �$  `  #US �/     #GUID   �/  �  #Blob          W�		   �3      r      :   P   @   �      3               
                          �      * 
  P 
  � n  � n  � n  � n  � n  n   n  Z; n; |n  �� ��
 �   �� �� �� �� ��  � 

 7   R= ��g �   �� �" A0 ti �= ��� �   �� �� �� 9'
 M   S� |i �� �� ��& �  & �   �
  �� "� 4i B= O� X= |= �� ��  +� H   ui* �� ��  i -� Q� i� �� �� �� �� �� �� � � '� J� S v� �� �� �= �� 	� )	� G	= v	� �	� �	� �	� 
�
 
   
= &
 3
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
            %  M   � :  9     >  =   � B  9      F  9     J  9     W  A  !   [  A  !    _  A  !   c  E " !   g  I " %    kt9 # (   �tQ ' 1    �tU . =    ��9 8 J   ��Y : N  ;�  Q� ;� Q��  ;�Q�� Q�Q� Q��� Q���  ��  �V �Z �� ;� �  Q� �� �� �� �� ��'�V�;VV�VV�QV'�V�;ZV�ZV�QZ'�V�;�V��V�Q� ;� T�  j� �� �� � '� 2� :� B� L� U� h� u� z� �� '� � �	 �� � �	 ;  ;7P     �J � t     � ;�  �     � QG �     � ;�  "    � 7  �#    � ;7  �$    � ;�  %    �J 
  $%    � ;^ �&    ��c L'    �;h �'    �n �'    �;s H(    ��G �(    �;  �(    ��h	 H)    �; 	 �)    ��h
 *    � 
 h*    �Qy �*    �; ,+    � ;7  ,    � ;� �4    �;� 05    �   �5    � ;� �9    � ;� �:    �J   ;    ��7  `;    �J   t;    �� �;    ��      �J %      �/�      �6�      �J� <    �J   0<    �;G �<    �;  �<    �J   �<    ���  4=    ��
  �=    ��G �=    ��  $>    ��G t>    ��  �>    �G  ?    �   d?    �J  ! �?    �  ! 0@    � ��" �@    � ��$ �A    � Q�& DB    � �( C    � ;�* �C    �;�, �D    ��- @E    � ; . �E    � � / �F    � ; 0 �J    �J  0 �J    �J  0 �J    �J  1 K    � �	2 �K    � ;�3 4M    � �5 R    �  7 hS    � ; 8 XT    � ;9 �T    � ;�< 4U    � b
l> �U    � � ? <V    � ; @ <Z    �J  @ PZ    �$@ �Z    �;*@ H[    �;0@ �[    �;;A �[    �J  A �[    ��7 A    ;   Q   �   �   �   �   �   �   �   �   �   �   �   �   �   �   !   �   �   �   �   �   �   B   F   �   �   �   !   !   !   !   �   �   �   �   �   �   �   �   �   �   �   �   �   �   ^   �   �   �   �   �   �   �   �   �   �   �   B   �   �   �   ^   �	 J   J   J 
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
 !� y � � y ;� y � �+� y ;� y � �<� � j� � �� ��  � �� �������!q J  �J %�6+ J   V2 _GY�� �J  ��Kq �� ��RA�^ �c��k��
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
 .  h.  q.  �. # . + . 3 �. ; �. C �C S C � k Y	�T)�T�kY�kY�kY�kY�kY��kY�YkY�#�^#kY�kY�kY kYAkYakY�kY�kY�kY�kY�kY�kY kY@kY`kY�kY�kY�kY�kY kY kY kY04<BH^oy����������    ,          
   �@  �D  �H  �@  �D  �D  �D  !N  �]   c 8   9                ) 	  * 	  ,   +   -   .   0   /   K   L   M   N  � >(<Q�                           ��               ��               �=               ��            ��            �               ��            �0               �               ��               �             �      N  p     ~    � Y� �         <Module> System.Runtime.CompilerServices CompilationRelaxationsAttribute .ctor RuntimeCompatibilityAttribute System.Reflection AssemblyTitleAttribute AssemblyDescriptionAttribute AssemblyConfigurationAttribute AssemblyCompanyAttribute AssemblyProductAttribute AssemblyCopyrightAttribute AssemblyTrademarkAttribute System.Runtime.InteropServices ComVisibleAttribute GuidAttribute AssemblyFileVersionAttribute System STAThreadAttribute Object adm Enum MulticastDelegate EventArgs Attribute WUL.Ctrls GUserControl GHostForm System.Configuration ApplicationSettingsBase adn a System.Windows.Forms Application EnableVisualStyles SetCompatibleTextRenderingDefault WUL.Forms SkinForm SkinFormTransition get_DefaultTransition WindowAnimateType set_AnimateType System.Drawing.Text TextRenderingHint DefaultTextRenderingHint WUL.Localization ML LoadDefaultLanguages LoadLangResById WUL.Engine SkinEngine ChangeSkin Form Run d Environment SpecialFolder GetFolderPath get_CompanyName String Concat System.IO Path Combine File Exists Copy get_ExecutablePath GetDirectoryName WUL.Configuration IniConfig ReadValue ag3 c Exception get_Message System.Diagnostics Trace WriteLine Directory DirectoryInfo CreateDirectory z Int32 TryParse Empty dwu dwt CompilerGeneratedAttribute IsNullOrEmpty FileAttributes SetAttributes b Format DateTime MinValue Process Start IWin32Window TimeSpan FormStartPosition set_StartPosition DialogResult ShowDialog IDisposable Dispose System.Collections.Generic Dictionary`2 get_Item get_Now ContainsKey ToString Subtract get_TotalDays System.Threading WaitCallback ThreadPool QueueUserWorkItem KeyCollection get_Keys get_Count System.Text StringBuilder Append Newtonsoft.Json JsonConvert DeserializeObject Add System.Net WebRequest Create set_ContentType set_Method set_Timeout Encoding get_UTF8 GetBytes set_ContentLength Stream GetRequestStream Write Close WebResponse GetResponse HttpWebResponse GetResponseStream StreamReader TextReader ReadToEnd IAsyncResult AsyncCallback AttributeUsageAttribute AttributeTargets System.ComponentModel ToolboxItemAttribute IContainer GCheckBox set_Checked set_SkinName Delegate Interlocked CompareExchange Remove GScrollableControl SuspendLayout set_AutoSize System.Drawing Point GControl set_Location Padding set_Margin set_Name Size set_Size set_TabStop EventHandler add_Click set_TabIndex SizeF set_AutoScaleDimensions AutoScaleMode set_AutoScaleMode set_ClientSize GControlCollection get_GControls ResumeLayout PerformLayout GLabel GButton OnLoad set_Visible GetText set_Text set_Enabled Guid r j NewGuid GetHashCode Random Next aeg Control Thread Sleep Nullable`1 dw1 dwy get_Checked CancelEventArgs OnClosing Font FontStyle set_Font Color FromArgb set_ForeColor ContentAlignment set_TextAlign add_CheckedChanged AnchorStyles set_Anchor set_BackgroundSkin ContainerControl get_White set_BackColor set_CloseBox FormBorderStyle set_FormBorderStyle set_FullSkin set_MaximizeBox set_MinimizeBox set_ShowIcon set_ShowInTaskbar SizeGripStyle set_SizeGripStyle System.CodeDom.Compiler GeneratedCodeAttribute DebuggerNonUserCodeAttribute System.Resources ResourceManager System.Globalization CultureInfo Type RuntimeTypeHandle GetTypeFromHandle Assembly get_Assembly EditorBrowsableAttribute EditorBrowsableState SettingsBase Synchronized DrFoneOnlineRating.exe mscorlib Utilities WUL.Core GATracker SensorsTracker DotfuscatorAttribute du2 du3 du4 du5 ResponseData du6 du7 du8 du9 dva StarItem DrFone.OnlineRating StarRatingControl StarRatingGuideForm Resources DrFone.OnlineRating.Properties Settings A_0 e f g h i A_1 .cctor <data>k__BackingField get_data set_data value value__ Invoke BeginInvoke A_2 A_3 EndInvoke <name>k__BackingField <old_value>k__BackingField <new_value>k__BackingField <percent>k__BackingField get_name set_name get_old_value set_old_value get_new_value set_new_value get_percent set_percent RatingClick components oneStar twoStar threeStar fourStar fiveStar disposing ratingResult plan isCollectData collectType starRatingControl desclbl optionCheckBox submitBtn tiplbl A C data name old_value new_value percent Culture Default DrFoneOnlineRating DrFone.OnlineRating.Properties.Resources.resources DrFone.OnlineRating.StarRatingControl.resources DrFone.OnlineRating.StarRatingGuideForm.resources  ?W o n d e r s h a r e _ D r F o n e _ O n l i n e R a t i n g  * . d a t  D e f a u l t  5\ D r . F o n e \ D r F o n e T o o l K i t . i n i  #C u s t o m i z a t i o n . x m l  S y s t e m  D e f a u l t L a n g u a g e  E N G  	d a t a  U A - 1 4 0 7 3 1 5 6 3 - 2 s o c i a l  3p r o d u c t   i s   e m p t y ,   r e t u r n ;  +d r f o n e _ { 0 } _ R a t i n g . i n i  D r . F o n e  R a t i n g  O n l i n e R a t i n g  H a s R a t e d  )H a s S e l e c t N o S h o w A g a i n  R a t e S t a r t T i m e  9< R a t i n g R e c o r d >   s t a r t   p r c . . .    ?< R a t i n g R e c o r d >   s t a r t   p r c   o k . . .    -D r F o n e O n l i n e R a t i n g . e x e  9< R a t i n g R e c o r d >   s h o w   f o r m . . .    ]t u r n   o f f   t h e   t r u s t p i l o t   s c o r i n g   g u i d e ,   r e t u r n .  _U s e r   c h e c k e d   t h e   " D o n ' t   s h o w   m e   a g a i n " ,   r e t u r n . ?< R a t i n g R e c o r d >   s h o w   f o r m   o k . . .    7n o t   m e e t   t h e   r u l e s ,   r e t u r n .  'y y y y - M M - d d   H H : m m : s s 7l e s s   t h a n   { 0 }   d a y s ,   r e t u r n .  %s t a r t   i n f o   c o u n t :    d a t a   i s   n u l l .  ?< R a t i n g S w i t c h H e l p e r >   b e g i n   g e t .  n a m e =  { d a t a :  }  9< R a t i n g S w i t c h H e l p e r >   e r r o r :    ;< R a t i n g S w i t c h H e l p e r >   e n d   g e t .  Ca p p l i c a t i o n / x - w w w - f o r m - u r l e n c o d e d 	P O S T  U< O n l i n e R a t i n g S w i t c h H e l p e r >   g e t j s o n   e r r o r :    oh t t p s : / / d r f o n e - c o l u d . w o n d e r s h a r e . c c / d f u p d a t i n g / g e t v a l u e #B a d R e v i e w C h e c k B o x  P r a i s e C h e c k B o x  o n e S t a r  t w o S t a r  t h r e e S t a r  f o u r S t a r  f i v e S t a r  #S t a r R a t i n g C o n t r o l  I N F _ R a t i n g N o B a d  N o t   t o o   b a d !  -I N F _ R a t i n g D i s a p p o i n t e d  D i s a p p o i n t e d !  #I N F _ R a t i n g A m a z i n g  A m a z i n g !  !O n l i n e R a t i n g P a g e  Oh t t p s : / / d r f o n e . w o n d e r s h a r e . c o m / s u p p o r t /  mh t t p : / / c b s . w o n d e r s h a r e . c o m / g o . p h p ? m = c k & p i d = 3 3 6 0 & n u m = 5 1  =S u b m i t   R a t i n g   R e c o r d   E r r o r : { 0 }  { 0 } _ R a t e  D o _ R a t i n g  R e s e a r c h T y p e  	S t a r  M o d u l e _ t y p e  S t a r _ R e v i e w  D o R e s e a r c h  U s e r R e s e a r c h  T a h o m a  d e s c l b l  R a t e   D r . F o n e  o p t i o n C h e c k B o x  )D o n ' t   s h o w   m e   a g a i n ! B l u e B u t t o n  s u b m i t B t n  S u b m i t  t i p l b l  #s t a r R a t i n g C o n t r o l  'S t a r R a t i n g G u i d e F o r m     QD r F o n e . O n l i n e R a t i n g . P r o p e r t i e s . R e s o u r c e s     ��1p�kHE�j���a�      ::>>G?I@KFAEEDIFKLPN !"      i mq  } ��           ��   ��   ��
 ���� �� �� �� ������4    ��    ����    ��  �� ��4   �� 
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
</assembly>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       �     �5                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      �R    0�R�	*�H����R�0�R�10	+ 0L
+�7�>0<0
+�70	 ��� 0!0	+ !}�73�3Ӗ��*%�u���^��"0��0�u�����-���P�@Z0	*�H�� 0e10	UUS10U
DigiCert Inc10Uwww.digicert.com1$0"UDigiCert Assured ID Root CA0220801000000Z311109235959Z0b10	UUS10U
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40�"0	*�H�� � 0�
� ��sh޻�]J<0"0i3�§%.�!=��Y��)�=X�v�ͮ{��0��8�VƗm��y����_�<RRƞ�~���WYUr�h�p²�u�js2��D.߂���t;mq�-� �� c)-��^Nȓ�!a�4��^�[����ͬ4@_�zf�w�H�fWW�TX�+�O�0�V��{]��O^�5�1�ړ^܎��ڶ��@�y�xǶ�ĵj8���7�.}���>�p�U�A2��s*n�|!LԼ�u]xf�:1D�3@��ZI��橠gݤ'��O9�X�$\F�d��i�v�v=Y]Bv���izH��f�t��K�c���:�=� �E%���D+~����am�3���K �}�Ï�!�����Ռp,A`��cD�vb~�����d�3щί�C���w��!�T)%�l�RQGt�&��Au�z�_�?ɼ�A[�P�1��r"	�|Lu?c�!_� Qko����O��E_� �������~
&���i/�-�٩�� ��:0�60U�0�0U����q]dL�.g?纘�O0U#0�E뢯��˂1-Q���!��m�0U��0y+m0k0$+0�http://ocsp.digicert.com0C+0�7http://cacerts.digicert.com/DigiCertAssuredIDRootCA.crt0EU>0<0:�8�6�4http://crl3.digicert.com/DigiCertAssuredIDRootCA.crl0U 
00U  0	*�H�� � p��C\U�8_��t=����W�����,�^��"��iT"�wm��Jz/-�8���������r�$�R�N�*��-V�����0z���^���CD�C!�r�H��˝O�w'D���Y��/���4<��Ǉ��L@5FjiT���V���=�����wZ\T�o�P=�v	h��o�� �5`� ��X�@cŘ"��Y�Uk�'�lv�o#-�~qj#k"��T-'~�:�𶇖�[�\��M�s���W�^(⹔0��0���67�$T|�G��(f*^[0	*�H�� 0b10	UUS10U
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40220323000000Z370322235959Z0c10	UUS10U
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CA0�"0	*�H�� � 0�
� Ɔ5I��=rIQU�%��7��Q��҃ўL�m��̃�Z��DB_���h�}���3P&s�m�W�}�C����s���+���"���=��+>B�g��Q=��V��(-�ӱ�u�e��)���i�ِ�F {�DA��|jWz�7y�]���d�R�vG�a��_�T!hn7!�@�_��J}��9g��cl���6\����dt@��rźN��XMy�׏s��,9�H��1�W)�'.����NvU&p�&�G C�Cc�{un'%��:8�����;[��"ق*ǒ����>�s��Zl��R�+Xt@(�sC��J�k8�)�ʪ�sBh��F��:����<�B�H4��L��=��d*�u($A�B��fIRP�Q�6IM� �,W5y+��E`�#�X��aޓ�9���0�L��JX>������^KvQ�Ɍ;[�"��&�}_#�d�c��>��t�?	v�]Fu�`�X	( �T���]�^0�F���v��k��3�ͱ ��]0�Y0U�0� 0U��mM�/s)v�/u�j ���o0U#0�����q]dL�.g?纘�O0U��0U%0
+0w+k0i0$+0�http://ocsp.digicert.com0A+0�5http://cacerts.digicert.com/DigiCertTrustedRootG4.crt0CU<0:08�6�4�2http://crl3.digicert.com/DigiCertTrustedRootG4.crl0 U 00g�0	`�H��l0	*�H�� � }Y����o��D"~f��!B�.M�0Sο��P]�K)�p��)i�i���>`���\[�m��� %41gͶ�o�PLb����V�s�"%Εi?Gw�rt���O�,z���C_�`��O�f�,��������d&�l���|�p
|屮uO�Z���]��(T��Պqve���r�#��'�D��'�$&���*����y���V��
E��č������r�����jq���	Ķ�͇�$�O�I�wf��r��KR�7~�S�;I��9z��%c�',=?k��f�A�O�@�!!@з$��x:䞭�4q��&k�8s��O�?;x�L��ĕ{�
_39�Axz8���#�(�����_�+�~�F�u,',&�o{�6������Y�p�7�� � O'�`g�f��U�:)����+�A�:��1�b	
��������Wټ���2��� �]���# �v&��evB�)�	G+�������UT+����+����/DJ��78�+���|�0��0����@�`ҜL�^ͩ����0	*�H�� 0b10	UUS10U
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40210429000000Z360428235959Z0i10	UUS10U
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA10�"0	*�H�� � 0�
� մ/B�(�x�]�9Y��B�3��=��pŻą&0���h�\��4$�KO�xC������gRO�W�����́>Mp$d���}4}L�WkC����;���GZ�L� %�Ӌ������	�e����I5�=Q�!xE.��,�����IpB2�����eh��ML�HRh��W]�e��O�,H�V�5��.�� �7���|��2������t��9��`��ֹ�1�ܭ����#GG��n��m���jg-ҽD����;	�Ǜ2Z��j`T�I����\�o�&��ղ�8��Α����o�a4\��E(�6*f(_�s΋&%���\�L�b�^3����
��+��6y���u�e̻�HP�w���P�F�aX��|<�(�9��ԷS��G�u0��0�v�[K]taM?�v޿X�r)A���m&vhAX��&+�MY�xρJ>@G_ɁPs�#!Y`�dT��!�8|f�x8E0�O�cOL��SA|X=G����2	�l<V ��Y0�U0U�0� 0Uh7��;�_���a{�e�NB0U#0�����q]dL�.g?纘�O0U��0U%0
+0w+k0i0$+0�http://ocsp.digicert.com0A+0�5http://cacerts.digicert.com/DigiCertTrustedRootG4.crt0CU<0:08�6�4�2http://crl3.digicert.com/DigiCertTrustedRootG4.crl0U 00g�0g�0	*�H�� � :#D=�v:��V���H4�,��tf��r� ʯl0'��D�K���|&�7�:]Hm��?I�'��EP������v~7q�"�Z�����j�� ��Py��������H~�؀�a��V���v���_C�>��v9=�ԙ�J�(�_&��XH���'?���v���`\�������9�8N�n�6���!SZ���j�>�C�3�O8�����Tm�]@3|╲�!usR�F��4��K��ov7,�?�&����C�� �p�����)5\�8U�7��	���1�.\9qᾜ�
�&g���N_�z�I�.�t���<�����V+#����{pk栺�:?E����R�A�H�K�M�D@��(���V*/�d<3��(�<ˏ��;��{���˷�w��(?���/"lA��\f�l�ņ��&3K��jj@0HK4�Q ����Ym�P+�J�����t���R����H!�W;���E��an�h�&`��ȯ����c:�VxN0��0���D��9���?_�a0	*�H�� 0c10	UUS10U
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CA0230714000000Z341013235959Z0H10	UUS10U
DigiCert, Inc.1 0UDigiCert Timestamp 20230�"0	*�H�� � 0�
� �SE���[�>T�#�ϟ����]�	�/H��z;*�g�bX����ͪ�j�)�bci�X�5q�:��P� �ǚ;/�f�i�i�[��+ �����P�����0hʃB��	$����j��;�]���E�al��q^��<��.yfR���>_�Cӄ����H-^Eu�u�������R��G�x)9k�xY��D+JՕ���dM�#�ʆ!dp����c�.���$�����_���v}1�eGU�J$/�+�����{s>2�R4�Ի�Ԡ,4���nd7��QͪLf��hb��Axm���XA�ر,�Q����b�i|dM����^���Pɳʼ��;hD��;B�s}��
�y4~�\
XL >�iuǃd�u͏vV�$���k!��4�/:�k���*��{R8��	�q�lq�>�o����aG
�������l$�B�ʠq=����ip'O��6��_�p��
�.d��"+��(!IQ~f�;���8�Qʔ��P��:ӊ��@{ ���0��0U��0U�0 0U%�0
+0 U 00g�0	`�H��l0U#0���mM�/s)v�/u�j ���o0U�������d��V�e1����I0ZUS0Q0O�M�K�Ihttp://crl3.digicert.com/DigiCertTrustedG4RSA4096SHA256TimeStampingCA.crl0��+��0��0$+0�http://ocsp.digicert.com0X+0�Lhttp://cacerts.digicert.com/DigiCertTrustedG4RSA4096SHA256TimeStampingCA.crt0	*�H�� � ��ޠ����p�O�<h��%��,���]"��"��π������&��q/�N��l��`�+��=H��k�|]��a7hIw�됪�'�����@8�]Ƞ.%x%�*z�)��Wy��&V+��7ؘvOV�R¶�8���mA\�iѹ+��{Ϝ�x�v�iu�P�D� ��D���IwZ!ŴϘ�T����i���74n�A&��Z�O3�ԍw}uE��X&jE��P�P��V�L��F�(ӭ�C p�̘���ԑ7�MR��`!�VG��K�2È�X��>�_�B֏��Ѫ�Uㆿ�',AК3J�6Թr�~�y8H_���=2�u�6gZ������O5< ���*ly��D�:�8;^9X�|s1U���~�����ye�h�"�;뚂5W(�i�2����:��F�k���wll���s:�IF��̶8�������C,�NL}hp�w
��\`�(�8�RZ֬"#N����Pk�wq�DAɸF�l2|X/gGe�s���k,F�A��_��٭��D��A�0�J0�2���w���K�$�!o0	*�H�� 0i10	UUS10U
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA10220408000000Z250405235959Z0�10+�7<CN1 0+�7<西藏自治区10UPrivate Organization10U91540195754285145H10	UCN10U西藏自治区10U	拉萨市1-0+U
$Wondershare Technology Group Co.,Ltd1-0+U$Wondershare Technology Group Co.,Ltd0�"0	*�H�� � 0�
� ��\����x((ᑎ�"yqJ����mP��1X-�찹
o��-TB�tօ	�Ǒ�9�qu]�n�l��.��5�O���ѳ##(4d�lDඩ$�S�oz[��G�+�%�6�rq���s�i��K��q��Ja�es(�C���u8��l������7.%�fȬJ�O�̈��X>��8��LD�2�+��]�G>����&fD��hsd�M��#�OR��l��ӳ������V{i�e.d�Ϣ鑳��
���se�7�ad�P���
0$�.�� ��p�����W�y���o�+N��zIj 6EYWE|�D��ۃ���}C�!��(���6p"<�G����;�����SuFK���P"��vAjo�)��g�� iۢ�vQ���}C�0pm9Ud��G.c���8���֢axv�/��劯5���VK�s�ODI��\�ыf��l��t|��<O���*2A�rf��I��u����HOR`ԅ��"w^���ݑ���ђ�=h���ߧTl�l�ҙFTG ��G0�C0U#0�h7��;�_���a{�e�NB0U�ӫ�W��n�I��;Q��<0@U907�5+�)0'%CN-西藏自治区-91540195754285145H0U��0U%0
+0��U��0��0S�Q�O�Mhttp://crl3.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crl0S�Q�O�Mhttp://crl4.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crl0=U 60402g�0)0'+http://www.digicert.com/CPS0��+��0��0$+0�http://ocsp.digicert.com0\+0�Phttp://cacerts.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crt0U�0 0	*�H�� � (�@|O_���L�����7���w(�_H����hR��Y�◓��Wd���O"^k"=C�>2���G�]��{@`�K�t^�`d�2-{���ײ�<l�i Pӓ��Ң�R�҂�N����8����O����=��)�,�eFX��b�ZM#�nD!�D�*�K^�=��2{�}�]�����Z�ʲ�����#���}��_5$��6#G���h�Lԏ�5��������L�g�^���u�*|�:7�Zq��ѓ�����El%��z �a����ث��L�������W2M�H"鯇�a2����VDuZ�>���](�=�� ��BE�L�~y��ņ�7b���B� �P�1-5"�Eқh���9� y����\�n��%6�_f��8d������%ĭ��yaw:=c�\�n��l��;�.6��oe�EBO\�8am���K���y�E4��C��Ey,	�Xx��/�*7�z%��Q�z��f�{ڏ�Z%����>�/���Y��1�0^0�0Z0}0i10	UUS10U
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA1��w���K�$�!o0	+ �p0
+�710 0	*�H��	1
+�70
+�710
+�70#	*�H��	1�|،5�p|�2��O��9a&��0	*�H�� � ���t���8J՜�(L��N��:Y���
@*�	��^���hu�����g���`�����#E��i~mo���ЙQE��p���c;�ӹwV%c��ٔ�O�L��;�cE0���j#��0ȏ���Y2+�Q��\F����$�CT �E͏w�,V/�KVdd�k(����4X��#������u���E��Y`0M�?yj����A��f�;��9	[��	Ӫ�p/�π��kbD��V���Ӆ�nſ�t2pԮ+4ޱ��$;hN5Y��xZO�Okcd�QHQP���aB��I�A������%}���ϩ�g>���6ZD��k�����C�A�a��ފ+/_ �[-���z����	^T��:[f����|6�gu%9�ioѾO`KLC���)��;6;��� T�%4��{z�l.7��yXx$�0lơ2rGfs�J��9}G�L��9�Ӯ���O�aG��[U�Z��a]����Ui9�\(A��-D0�	*�H��	1�0�	0w0c10	UUS10U
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CAD��9���?_�a0	`�He �i0	*�H��	1	*�H��0	*�H��	1240620030209Z0/	*�H��	1" �Py�vQO/����Ĭ�r�IfK0�����Xi�0	*�H�� � =6�36�i��4�:F�M@�Έҭc�H��:^/�g�O�jV��Z>��9�2���#���6��< �ɰ3a�osz���>]�D*$q�K��t�����y�;�t3��<�4��h*��H̿Ք��d�����p�а&���?E(~�����̠-:�#O}�{�4u�u~d��f��a �up���MMV�,�;�w��-�4"ɖ�P��&���/u%����C?�ا}�1���5��[�*�R ��ҩ�[u�ϤC,���ˉ�>��AKHa��hi	��*�r�JF�0L-�Gm�s->��%o��C���{1F$��Ң����>�T�[�n�lxz��������,���.��OO��6�	���6Ɖ�՞8%�)�
# :	���<Z����8���/`�#bZ=h-��
#���������R���[��,�N4�66���f��;$a��(�+���G��5���&�mʗ�����_�V��8k�c?(�2�0�* 
+�71�*0�*	*�H����)�0�)�10	`�He 0\
+�7�N0L0
+�70	 ��� 010	`�He  �?�YW?��fۙ�<ȋ��N�)�v�z��,��0��0����@�`ҜL�^ͩ����0	*�H�� 0b10	UUS10U
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40210429000000Z360428235959Z0i10	UUS10U
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA10�"0	*�H�� � 0�
� մ/B�(�x�]�9Y��B�3��=��pŻą&0���h�\��4$�KO�xC������gRO�W�����́>Mp$d���}4}L�WkC����;���GZ�L� %�Ӌ������	�e����I5�=Q�!xE.��,�����IpB2�����eh��ML�HRh��W]�e��O�,H�V�5��.�� �7���|��2������t��9��`��ֹ�1�ܭ����#GG��n��m���jg-ҽD����;	�Ǜ2Z��j`T�I����\�o�&��ղ�8��Α����o�a4\��E(�6*f(_�s΋&%���\�L�b�^3����
��+��6y���u�e̻�HP�w���P�F�aX��|<�(�9��ԷS��G�u0��0�v�[K]taM?�v޿X�r)A���m&vhAX��&+�MY�xρJ>@G_ɁPs�#!Y`�dT��!�8|f�x8E0�O�cOL��SA|X=G����2	�l<V ��Y0�U0U�0� 0Uh7��;�_���a{�e�NB0U#0�����q]dL�.g?纘�O0U��0U%0
+0w+k0i0$+0�http://ocsp.digicert.com0A+0�5http://cacerts.digicert.com/DigiCertTrustedRootG4.crt0CU<0:08�6�4�2http://crl3.digicert.com/DigiCertTrustedRootG4.crl0U 00g�0g�0	*�H�� � :#D=�v:��V���H4�,��tf��r� ʯl0'��D�K���|&�7�:]Hm��?I�'��EP������v~7q�"�Z�����j�� ��Py��������H~�؀�a��V���v���_C�>��v9=�ԙ�J�(�_&��XH���'?���v���`\�������9�8N�n�6���!SZ���j�>�C�3�O8�����Tm�]@3|╲�!usR�F��4��K��ov7,�?�&����C�� �p�����)5\�8U�7��	���1�.\9qᾜ�
�&g���N_�z�I�.�t���<�����V+#����{pk栺�:?E����R�A�H�K�M�D@��(���V*/�d<3��(�<ˏ��;��{���˷�w��(?���/"lA��\f�l�ņ��&3K��jj@0HK4�Q ����Ym�P+�J�����t���R����H!�W;���E��an�h�&`��ȯ����c:�VxN0�J0�2���w���K�$�!o0	*�H�� 0i10	UUS10U
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA10220408000000Z250405235959Z0�10+�7<CN1 0+�7<西藏自治区10UPrivate Organization10U91540195754285145H10	UCN10U西藏自治区10U	拉萨市1-0+U
$Wondershare Technology Group Co.,Ltd1-0+U$Wondershare Technology Group Co.,Ltd0�"0	*�H�� � 0�
� ��\����x((ᑎ�"yqJ����mP��1X-�찹
o��-TB�tօ	�Ǒ�9�qu]�n�l��.��5�O���ѳ##(4d�lDඩ$�S�oz[��G�+�%�6�rq���s�i��K��q��Ja�es(�C���u8��l������7.%�fȬJ�O�̈��X>��8��LD�2�+��]�G>����&fD��hsd�M��#�OR��l��ӳ������V{i�e.d�Ϣ鑳��
���se�7�ad�P���
0$�.�� ��p�����W�y���o�+N��zIj 6EYWE|�D��ۃ���}C�!��(���6p"<�G����;�����SuFK���P"��vAjo�)��g�� iۢ�vQ���}C�0pm9Ud��G.c���8���֢axv�/��劯5���VK�s�ODI��\�ыf��l��t|��<O���*2A�rf��I��u����HOR`ԅ��"w^���ݑ���ђ�=h���ߧTl�l�ҙFTG ��G0�C0U#0�h7��;�_���a{�e�NB0U�ӫ�W��n�I��;Q��<0@U907�5+�)0'%CN-西藏自治区-91540195754285145H0U��0U%0
+0��U��0��0S�Q�O�Mhttp://crl3.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crl0S�Q�O�Mhttp://crl4.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crl0=U 60402g�0)0'+http://www.digicert.com/CPS0��+��0��0$+0�http://ocsp.digicert.com0\+0�Phttp://cacerts.digicert.com/DigiCertTrustedG4CodeSigningRSA4096SHA3842021CA1.crt0U�0 0	*�H�� � (�@|O_���L�����7���w(�_H����hR��Y�◓��Wd���O"^k"=C�>2���G�]��{@`�K�t^�`d�2-{���ײ�<l�i Pӓ��Ң�R�҂�N����8����O����=��)�,�eFX��b�ZM#�nD!�D�*�K^�=��2{�}�]�����Z�ʲ�����#���}��_5$��6#G���h�Lԏ�5��������L�g�^���u�*|�:7�Zq��ѓ�����El%��z �a����ث��L�������W2M�H"鯇�a2����VDuZ�>���](�=�� ��BE�L�~y��ņ�7b���B� �P�1-5"�Eқh���9� y����\�n��%6�_f��8d������%ĭ��yaw:=c�\�n��l��;�.6��oe�EBO\�8am���K���y�E4��C��Ey,	�Xx��/�*7�z%��Q�z��f�{ڏ�Z%����>�/���Y��1�}0�y0}0i10	UUS10U
DigiCert, Inc.1A0?U8DigiCert Trusted G4 Code Signing RSA4096 SHA384 2021 CA1��w���K�$�!o0	`�He ���0
+�710 0
*�H��	10	*�H��	1
+�70
+�710
+�70/	*�H��	1" 	o]I1��C�[��ml*���0㙈$��^�0	*�H�� � ��b=�,�P��X3R���
�5O"�����a�p�Z��kYJ��7��������m{�����qu���q,
N��LG�NrN���d���s�T�������M�P���ۛ�8n� ��s�޿���ꥨ�y���P�4J��hm�FP�k/��EZ:6;	��'Z�E���db�7�+A����D�R���f��k_��^̭���r&�'-�+�m��4�!j��l�=J1壗;eD7;T#��/��4����8c��۴m"P��7m�k=�UAX�n�3Zƥx��D�(b�Ͽԙr�%.s�ܭH�o�Eֲ���������_?~UX|�69��"լ�O�����M��@��Hb�>���Hmy�mA�d��Vf�G�.-aB-�����8#W�C@9n�q�9C�q�e
����������sU�g .�c�i��C����
����n���X���k"�1~[��Z'�Y������9N�j(C�oa�=������Ԧ1���?0�;
+�71�+0�'	*�H����0�10	`�He 0w*�H��	�hf0d	`�H��l010	`�He  �Ԑ����b�^2��k���54P5Jᜪ,?�X���?ƫW/=����\20240620030226Z��	0��0���D��9���?_�a0	*�H�� 0c10	UUS10U
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CA0230714000000Z341013235959Z0H10	UUS10U
DigiCert, Inc.1 0UDigiCert Timestamp 20230�"0	*�H�� � 0�
� �SE���[�>T�#�ϟ����]�	�/H��z;*�g�bX����ͪ�j�)�bci�X�5q�:��P� �ǚ;/�f�i�i�[��+ �����P�����0hʃB��	$����j��;�]���E�al��q^��<��.yfR���>_�Cӄ����H-^Eu�u�������R��G�x)9k�xY��D+JՕ���dM�#�ʆ!dp����c�.���$�����_���v}1�eGU�J$/�+�����{s>2�R4�Ի�Ԡ,4���nd7��QͪLf��hb��Axm���XA�ر,�Q����b�i|dM����^���Pɳʼ��;hD��;B�s}��
�y4~�\
XL >�iuǃd�u͏vV�$���k!��4�/:�k���*��{R8��	�q�lq�>�o����aG
�������l$�B�ʠq=����ip'O��6��_�p��
�.d��"+��(!IQ~f�;���8�Qʔ��P��:ӊ��@{ ���0��0U��0U�0 0U%�0
+0 U 00g�0	`�H��l0U#0���mM�/s)v�/u�j ���o0U�������d��V�e1����I0ZUS0Q0O�M�K�Ihttp://crl3.digicert.com/DigiCertTrustedG4RSA4096SHA256TimeStampingCA.crl0��+��0��0$+0�http://ocsp.digicert.com0X+0�Lhttp://cacerts.digicert.com/DigiCertTrustedG4RSA4096SHA256TimeStampingCA.crt0	*�H�� � ��ޠ����p�O�<h��%��,���]"��"��π������&��q/�N��l��`�+��=H��k�|]��a7hIw�됪�'�����@8�]Ƞ.%x%�*z�)��Wy��&V+��7ؘvOV�R¶�8���mA\�iѹ+��{Ϝ�x�v�iu�P�D� ��D���IwZ!ŴϘ�T����i���74n�A&��Z�O3�ԍw}uE��X&jE��P�P��V�L��F�(ӭ�C p�̘���ԑ7�MR��`!�VG��K�2È�X��>�_�B֏��Ѫ�Uㆿ�',AК3J�6Թr�~�y8H_���=2�u�6gZ������O5< ���*ly��D�:�8;^9X�|s1U���~�����ye�h�"�;뚂5W(�i�2����:��F�k���wll���s:�IF��̶8�������C,�NL}hp�w
��\`�(�8�RZ֬"#N����Pk�wq�DAɸF�l2|X/gGe�s���k,F�A��_��٭��D��A�0��0���67�$T|�G��(f*^[0	*�H�� 0b10	UUS10U
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40220323000000Z370322235959Z0c10	UUS10U
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CA0�"0	*�H�� � 0�
� Ɔ5I��=rIQU�%��7��Q��҃ўL�m��̃�Z��DB_���h�}���3P&s�m�W�}�C����s���+���"���=��+>B�g��Q=��V��(-�ӱ�u�e��)���i�ِ�F {�DA��|jWz�7y�]���d�R�vG�a��_�T!hn7!�@�_��J}��9g��cl���6\����dt@��rźN��XMy�׏s��,9�H��1�W)�'.����NvU&p�&�G C�Cc�{un'%��:8�����;[��"ق*ǒ����>�s��Zl��R�+Xt@(�sC��J�k8�)�ʪ�sBh��F��:����<�B�H4��L��=��d*�u($A�B��fIRP�Q�6IM� �,W5y+��E`�#�X��aޓ�9���0�L��JX>������^KvQ�Ɍ;[�"��&�}_#�d�c��>��t�?	v�]Fu�`�X	( �T���]�^0�F���v��k��3�ͱ ��]0�Y0U�0� 0U��mM�/s)v�/u�j ���o0U#0�����q]dL�.g?纘�O0U��0U%0
+0w+k0i0$+0�http://ocsp.digicert.com0A+0�5http://cacerts.digicert.com/DigiCertTrustedRootG4.crt0CU<0:08�6�4�2http://crl3.digicert.com/DigiCertTrustedRootG4.crl0 U 00g�0	`�H��l0	*�H�� � }Y����o��D"~f��!B�.M�0Sο��P]�K)�p��)i�i���>`���\[�m��� %41gͶ�o�PLb����V�s�"%Εi?Gw�rt���O�,z���C_�`��O�f�,��������d&�l���|�p
|屮uO�Z���]��(T��Պqve���r�#��'�D��'�$&���*����y���V��
E��č������r�����jq���	Ķ�͇�$�O�I�wf��r��KR�7~�S�;I��9z��%c�',=?k��f�A�O�@�!!@з$��x:䞭�4q��&k�8s��O�?;x�L��ĕ{�
_39�Axz8���#�(�����_�+�~�F�u,',&�o{�6������Y�p�7�� � O'�`g�f��U�:)����+�A�:��1�b	
��������Wټ���2��� �]���# �v&��evB�)�	G+�������UT+����+����/DJ��78�+���|�0��0�u�����-���P�@Z0	*�H�� 0e10	UUS10U
DigiCert Inc10Uwww.digicert.com1$0"UDigiCert Assured ID Root CA0220801000000Z311109235959Z0b10	UUS10U
DigiCert Inc10Uwww.digicert.com1!0UDigiCert Trusted Root G40�"0	*�H�� � 0�
� ��sh޻�]J<0"0i3�§%.�!=��Y��)�=X�v�ͮ{��0��8�VƗm��y����_�<RRƞ�~���WYUr�h�p²�u�js2��D.߂���t;mq�-� �� c)-��^Nȓ�!a�4��^�[����ͬ4@_�zf�w�H�fWW�TX�+�O�0�V��{]��O^�5�1�ړ^܎��ڶ��@�y�xǶ�ĵj8���7�.}���>�p�U�A2��s*n�|!LԼ�u]xf�:1D�3@��ZI��橠gݤ'��O9�X�$\F�d��i�v�v=Y]Bv���izH��f�t��K�c���:�=� �E%���D+~����am�3���K �}�Ï�!�����Ռp,A`��cD�vb~�����d�3щί�C���w��!�T)%�l�RQGt�&��Au�z�_�?ɼ�A[�P�1��r"	�|Lu?c�!_� Qko����O��E_� �������~
&���i/�-�٩�� ��:0�60U�0�0U����q]dL�.g?纘�O0U#0�E뢯��˂1-Q���!��m�0U��0y+m0k0$+0�http://ocsp.digicert.com0C+0�7http://cacerts.digicert.com/DigiCertAssuredIDRootCA.crt0EU>0<0:�8�6�4http://crl3.digicert.com/DigiCertAssuredIDRootCA.crl0U 
00U  0	*�H�� � p��C\U�8_��t=����W�����,�^��"��iT"�wm��Jz/-�8���������r�$�R�N�*��-V�����0z���^���CD�C!�r�H��˝O�w'D���Y��/���4<��Ǉ��L@5FjiT���V���=�����wZ\T�o�P=�v	h��o�� �5`� ��X�@cŘ"��Y�Uk�'�lv�o#-�~qj#k"��T-'~�:�𶇖�[�\��M�s���W�^(⹔1�v0�r0w0c10	UUS10U
DigiCert, Inc.1;09U2DigiCert Trusted G4 RSA4096 SHA256 TimeStamping CAD��9���?_�a0	`�He ���0	*�H��	1*�H��	0	*�H��	1240620030226Z0+*�H��	1000f�+2����]Ϊ���O��@0/	*�H��	1"  �h�S`���7��)�)�&���M�Cn~��07*�H��	/1(0&0$0" ���m�t"���@WhA6o���U��3�M��x(0	*�H�� � � o�Qm�>_�Uu$l��*�Χ���;�������[�v~�P�'��ni1�lt� x�C�V�/�n�j$��w-��s9f�ԭ#�� ��V�z�8��;��M2�+d7hk�@s�Tb��t�
1j!���NZ��KE��K�,��vUNc�a�KDx���;�D��ѽ1�kS׏b!U^L��0�-q�M{/��z�XY
v�G����-(�|N�j�K�}�ڃF"9��ƞ�N9ĸ��[�~m�Q#6|��0_�z�E���~s��È�c,�P���P%������x_�{}h��~���j�l]��h?�<�ˣ�K�E����3�G��o��Cv�_�u���NO����x~A�:��)�<�����J��K��S5�r�;�pŗ\o��6h$��.fܥX��I�ѿ��??��R�u�<�g��4���:+�A��+�S��0��O|n��޵��B	���_�B���>�Wi�ům��s�}���$rD�a5��Zw�m�#��zL$                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  elf->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
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
