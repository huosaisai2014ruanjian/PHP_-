<?php if (!defined('THINK_PATH')) exit();?><table class="table" width="100%" layoutH="138">
	<thead>
		<tr>
			<th>用户姓名</th>
			<th>手机号</th>
			<th>服务台手机号</th>
			<th>等级</th>
			<th>从业年限</th>
			<th>专长</th>
			<th>个人介绍</th>
			<th>顾问</th>
			<th>认证达人</th>
			<th>警告</th>
			<th>封号</th>
			<th>累计经验</th>
			<th>剩余经验</th>

		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo ($data["name"]); ?></td>
			<td><?php echo ($data["tel"]); ?></td>
			<td><?php echo ($data["ptel"]); ?></td>
			<td><?php echo ($data["rank"]); ?></td>
			<td><?php echo ($data["time"]); ?></td>
			<td><?php echo ($data["specialty"]); ?></td>
			<td><?php echo ($data["introduction"]); ?></td>
			<td><?php echo ($data["advistor"]); ?></td>
			<td><?php echo ($data["authenticate"]); ?></td>
			<td><?php echo ($data["jinggao"]); ?></td>
			<td><?php echo ($data["fenghao"]); ?></td>
			<td><?php echo ($data["exprience"]); ?></td>
			<td><?php echo ($data["surplus"]); ?></td>

		</tr>
		<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($r["name"]); ?></td>
				<td><?php echo ($r["tel"]); ?></td>
				<td><?php echo ($r["ptel"]); ?></td>
				<td><?php echo ($r["rank"]); ?></td>
				<td><?php echo ($r["time"]); ?></td>
				<td><?php echo ($r["specialty"]); ?></td>
				<td><?php echo ($r["introduction"]); ?></td>
				<td><?php echo ($r["advistor"]); ?></td>
				<td><?php echo ($r["authenticate"]); ?></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</tbody>
</table>