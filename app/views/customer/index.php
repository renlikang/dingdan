<h3>客户信息列表</h3>
<div class="alert alert-success">
  <a class="btn btn-success" href='index.php?r=customer/add'>添加客户信息</a>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th width='7%'>客户代码</th>
      <th width='10%'>姓名</th>
      <th width='10%'>联系人</th>
      <th width='10%'>品牌联系人</th>
      <th width='20%'>办公地址及寄票对账</th>
      <th width='20%'>仓库地址及收货人信息</th>
      <th width='10%'>操作</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($model as $k=>$v):?>
    <tr>
      <td><?= $v->customer_code?></td>
      <td><?= $v->customer_name?></td>
      <td><?= $v->link_man?></td>
      <td><?= $v->logo_linkman?></td>
      <td><?= $v->office_address?></td>
      <td><?= $v->warehouse_address?></td>
      <td><a class="label label-danger" href='index.php?r=customer/add&id=<?= $v->id;?>'>更新</a></td>
    </tr>
  <?php endforeach;?>
  </tbody>
</table>