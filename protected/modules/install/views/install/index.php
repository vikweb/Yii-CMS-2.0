<p>Системные требования:</p>
<table class="table table-striped table-bordered table-condensed">
    <thead>
    <tr>
        <td>Название</td>
        <td>Поддержка</td>
        <td>Ваша версия</td>
        <td>Минимальная версия</td>
        <td>Для чего нужно</td>
    </tr>
    </thead>
    <tbody>
        <? foreach ($support as $technology => $data) { ?>
            <tr class="<?= $data['is_support'] ? 'support' : 'not-support'; ?>">
                <td><?= $technology ?></td>
                <td><?= $data['is_support'] ? 'Да' : 'Нет' ?> </td>
                <td><?= isset($data['version']) ? $data['version'] : '' ?> </td>
                <td><?= isset($data['minimal_version']) ? $data['minimal_version'] : '' ?> </td>
                <td><?= isset($data['reason']) ? $data['reason'] : '' ?> </td>
            </tr>
        <? } ?>
    </tbody>
</table>

<a class="btn" href="<?= $this->createUrl('step1') ?>">Продолжить &rarr;</a>
