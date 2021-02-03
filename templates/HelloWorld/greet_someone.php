<h1>Hello <?= $someoneToGreet ?>!</h1>

<?php

$services = [
    'facebook' => __('Share on Facebook'),
    //'gplus' => __('Share on Google+'),
    'linkedin' => __('Share on LinkedIn'),
    'twitter' => __('Share on Twitter')
];
echo '<ul>';
foreach ($services as $service => $linkText) {
    echo '<li>' . $this->SocialShare->link(
        $service,
        $linkText
    ) . '</li>';
}
echo '</ul>';
?>

<?= $this->Form->create() ?>
<label>A special someone's name:
    <input name="someoneSpecial" type="text" />
</label>
<?= $this->Form->submit("Send greetings!") ?>
<?= $this->Form->end() ?>
