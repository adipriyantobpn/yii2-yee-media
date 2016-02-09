<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size"><?= \Yii::t('yee', 'Processing') ?>...</p>
            <div class="progress active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-primary" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span><?= \Yii::t('yee', 'Start') ?></span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-default cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span><?= \Yii::t('yee', 'Cancel') ?></span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}






</script>