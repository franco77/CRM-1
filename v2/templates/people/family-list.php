<?php


use ChurchCRM\dto\SystemConfig;
use ChurchCRM\FamilyQuery;
use Propel\Runtime\ActiveQuery\Criteria;
use ChurchCRM\Utils\InputUtils;
use ChurchCRM\dto\SystemURLs;

//Set the page title
$sPageTitle = gettext('Danh sách khách hàng xếp dỡ');
include SystemURLs::getDocumentRoot() . '/Include/Header.php';
/* @var $families ObjectCollection */
?>

<div class="pull-right">
  <a class="btn btn-success" role="button" href="<?= SystemURLs::getRootPath()?>/FamilyEditor.php">
    <span class="fa fa-plus" aria-hidden="true"></span><?= gettext(' Thêm khách hàng xếp dỡ') ?>
  </a>
</div>
<p><br/><br/></p>
<div class="box">
    <div class="box-body">
        <table id="families" class="table table-striped table-bordered data-table" cellspacing="0" width="100%" style="font-size:8.5px;;font-family:'times new roman'">
            <thead>
            <tr>
                <th><?= gettext('Chi tiết') ?></th>
                <th><?= gettext('Khu vực') ?></th>
                <th><?= gettext('Tên chủ hàng') ?></th>
                <th><?= gettext('Liên hệ') ?></th>
                <th><?= gettext('Nhóm hàng') ?></th>
                <th><?= gettext('Loại hàng') ?></th>
                <th><?= gettext('Chiều hàng') ?></th>
                <th><?= gettext('PT làm hàng') ?></th>
                <th><?= gettext('TG làm hàng') ?></th>
                <th><?= gettext('Giá xếp dỡ') ?></th>
                <th><?= gettext('Giá cân hàng') ?></th>
                <th><?= gettext('Kiểm đếm') ?></th>
                <th><?= gettext('Xe qua cổng') ?></th>
                <th><?= gettext('Xe cứu hỏa') ?></th>
                <th><?= gettext('Vận chuyển') ?></th>
                <th><?= gettext('Phí quản lý') ?></th>
                <th><?= gettext('Xe cuốc vun') ?></th>
                <th><?= gettext('XD trong bãi') ?></th>
                <th><?= gettext('VS cầu cảng') ?></th>
                <th><?= gettext('Thuê bãi') ?></th>
                <th><?= gettext('Khác') ?></th>
            </tr>
            </thead>
            <tbody>

            <!--Populate the table with family details -->
            <?php foreach ($families as $family) {    ?>
            <tr>
              <td><a href='<?= SystemURLs::getRootPath()?>/FamilyView.php?FamilyID=<?= $family->getId() ?>'>
                        <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                    <a href='<?= SystemURLs::getRootPath()?>/FamilyEditor.php?FamilyID=<?= $family->getId() ?>'>
                        <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                        </span>
                    </a></td>
              <td><?= $family->getName() ?></td>
                <td> <?= $family->getAddress() ?></td>
                <td><?= $family->getHomePhone() ?></td>
                <td><?= $family->getCellPhone() ?></td>
				<td><?= $family->getEmail() ?></td>		
				<td><?= $family->getName() ?></td>
				<td><?= $family->getName() ?></td>
				<td><?= $family->getName() ?></td>
				<td><?= $family->getName() ?></td>
				<td><?= $family->getName() ?></td>
				<td><?= $family->getName() ?></td>
				<td><?= $family->getName() ?></td>
				<td><?= $family->getName() ?></td>
				<td><?= $family->getName() ?></td>
				<td><?= $family->getName() ?></td>
				<td><?= $family->getName() ?></td>
				<td><?= $family->getName() ?></td>
				<td><?= $family->getName() ?></td>
				<td><?= $family->getName() ?></td>
				<td><?= $family->getName() ?></td>
                <?php
}
                ?>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<script nonce="<?= SystemURLs::getCSPNonce() ?>" >
  $(document).ready(function () {
    $('#families').DataTable(window.CRM.plugin.dataTable);
  });
</script>

<?php
require SystemURLs::getDocumentRoot() .  '/Include/Footer.php';
?>
