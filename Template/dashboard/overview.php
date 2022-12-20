<?php
$file = $this->task->projectCoverimageModel->getCoverimage($project['id']);
if (isset($file)) {
?>
    <span class="avatar avatar-20 avatar-inline">
        <a href="<?= getenv('HTTP_HOST').'/?controller=BoardViewController&action=show&project_id='.$project['id'] ?>" alt="<?= $this->text->e($file['name']) ?>">
            <img src="<?= $this->url->href('FileViewerController', 'thumbnail', array('file_id' => $file['id'], 'project_id' => $project['id'])) ?>" title="<?= $this->text->e($file['name']) ?>" alt="<?= $this->text->e($file['name']) ?>" vspace="5" hspace="3" height="25">
        </a>
    </span>
<?php
}
?>
