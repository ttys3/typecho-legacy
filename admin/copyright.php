<?php if(!defined('__TYPECHO_ADMIN__')) exit; ?>
<div class="typecho-foot" role="contentinfo">
    <div class="copyright">
        <a href="http://typecho.org" class="i-logo-s">Typecho</a>
        <p><?php _e('由 <a href="http://typecho.org">%s</a> 强力驱动, 版本 %s (%s)', $options->software, $prefixVersion, $suffixVersion); ?></p>
    </div>
    <nav class="resource">
        <a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=b6421e379e86d5d22db97de6f5e42f82e95d37c30c0421fa4d90825d1e3773c1">
            NanoDM固件交流群
        </a>
        <a target="_blank" href="http://nanodm.net">
            NanoDM官网
        </a>
        <a href="http://docs.typecho.org"><?php _e('帮助文档'); ?></a> &bull;
        <a href="http://forum.typecho.org"><?php _e('支持论坛'); ?></a> &bull;
        <a href="https://github.com/typecho/typecho/issues"><?php _e('报告错误'); ?></a> &bull;
        <a href="http://extends.typecho.org"><?php _e('资源下载'); ?></a>
    </nav>
</div>
