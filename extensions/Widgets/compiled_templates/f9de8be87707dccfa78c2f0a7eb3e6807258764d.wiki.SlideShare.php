<?php /* Smarty version Smarty-3.1.7, created on 2013-04-18 04:35:25
         compiled from "wiki:SlideShare" */ ?>
<?php /*%%SmartyHeaderCode:1034125753516f780dc300d7-86273356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9de8be87707dccfa78c2f0a7eb3e6807258764d' => 
    array (
      0 => 'wiki:SlideShare',
      1 => 20130418043302,
      2 => 'wiki',
    ),
  ),
  'nocache_hash' => '1034125753516f780dc300d7-86273356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'width' => 0,
    'height' => 0,
    'player' => 0,
    'doc' => 0,
    'norelated' => 0,
    'start' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516f780dce26b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516f780dce26b')) {function content_516f780dce26b($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_validate')) include '/var/www/gsma_kb/extensions/Widgets/smarty_plugins/modifier.validate.php';
?><object width="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['width']->value)===null||$tmp==='' ? 425 : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" height="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['height']->value)===null||$tmp==='' ? 355 : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><param name="movie" value="http://static.slidesharecdn.com/swf/ssplayer<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['player']->value)===null||$tmp==='' ? 2 : $tmp), ENT_QUOTES, 'UTF-8', true);?>
.swf?doc=<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['doc']->value));?>
<?php if (isset($_smarty_tpl->tpl_vars['norelated']->value)){?>&rel=0<?php }?><?php if (isset($_smarty_tpl->tpl_vars['start']->value)){?>&startSlide=<?php echo smarty_modifier_validate(str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['start']->value)),'int');?>
<?php }?>" /><param name="allowFullScreen" value="true"/><param name="allowScriptAccess" value="always"/><embed  src="http://static.slidesharecdn.com/swf/ssplayer<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['player']->value)===null||$tmp==='' ? 2 : $tmp), ENT_QUOTES, 'UTF-8', true);?>
.swf?doc=<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['doc']->value));?>
" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['width']->value)===null||$tmp==='' ? 425 : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" height="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['height']->value)===null||$tmp==='' ? 355 : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"></embed></object><?php }} ?>