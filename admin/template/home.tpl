<!–– Burada sayfa sitilleri belirtilip yüklemeleri yapılıyor ––>
{combine_css path=$MatchAndCopy_PATH|@cat:"admin/template/style.css"}

{html_style}
    h4 {
    text-align:left !important;
    }
{/html_style}


<div class="titrePage">
    <h2>MatchAndCopy</h2>
</div>

<form method="post" action="" class="properties">
    <fieldset>
        <legend>{'What MatchAndCopy can do for me?'|translate}</legend>
        {$MatchAndCopy_prefixeTable}
        <br>
        {$INTRO_CONTENT}
        <br>
        <span class="default_file">
            <a href="{$file_log}"
                onclick="window.open( this.href, 'local_file', 'location=no,toolbar=no,menubar=no,status=no,resizable=yes,scrollbars=yes,width=800,height=700' ); return false;">{'locfiledit_show_default'|@translate} "{$file_log}"</a>
</span>
    </fieldset>