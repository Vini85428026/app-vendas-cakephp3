
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($venda) ?>
    <fieldset>
        <legend><?= __('Efetuar Venda') ?></legend>
        <?php
            echo $this->Form->input('valorvenda');
            echo $this->Form->label('Frutas disponíveis');
            echo $this->Form->input('fruta_id', ['options' => $groups,  'label' => false, 'empty' => 'Selecione a fruta']);
            $sizes = array('0.05' => '5%', '0.1' => '10%', '0.15' => '15%', '0.2' => '20%', '0.25' => '25%');
            echo $this->Form->input('desconto', array('options' => $sizes, 'empty' => 'Selecione o desconto'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Vender')) ?>
    <?= $this->Form->end() ?>
</div>
<br/>
<?= $this->Html->link('Listar Vendas', ['controller'=>'vendas', 'action'=>'index']); ?>