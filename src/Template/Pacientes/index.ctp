<?php $this->Html->addCrumb('Pacientes', '/pacientes'); ?>
<?php $this->Html->addCrumb('Administrar', ['controller' => 'Pacientes', 'action' => 'administrar']); ?>
    <div class="row-fluid">
        <div class="span12">
            <div class="da-panel collapsible">
                <div class="da-panel-header">
                    <span class="da-panel-title"><i class="icol-grid"></i> <?= __('Pacientes') ?></span>
                    <span class="da-panel-toggler"></span>
                </div>
                <div class="da-panel-toolbar">
                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <?= $this->Html->link('<i class="icol-add"></i> ' . __('Crear'),
                                ['action' => 'crear'], ['class' => 'btn', 'escape' => false]) ?>
                        </div>
                    </div>
                </div>
                <div class="da-panel-content da-table-container">
                    <?php
                    $options = [
                        'ajax' => [
                            'url' => $this->Url->build() // current controller, action, params
                        ],
                        "language" => [
                        "lengthMenu" => "Mostrando _MENU_ resultados por página",
                "zeroRecords" => "No se ha encontrado nada - disculpa",
                "info" => "Mostrando _START_ de _END_ de un total de _TOTAL_ resultados",
                "infoEmpty" => "No hay resultados disponibles",
                "infoFiltered" => "(filtrados de _MAX_ resultados en total)",
                "search" => "Buscar: ",
                "paginate" => [
                            "previous"  => "Anterior",
                    "next"  => "Siguiente",
                    "last"  => "Último",
                    "first"  => "Primero"
                ]
            ],
                        'data' => $data,
                        'deferLoading' => $data->count(),// https://datatables.net/reference/option/deferLoading
                        'columns' => [
                            [
                                'title' => _('Id'),
                                'name' => 'Pacientes.id',
                                'data' => 'id',
                                'searchable' => false,
                            ],
                            [
                                'title' => __('Nombre Completo'),
                                'name' => 'Pacientes.nombre_completo',
                                'data' => 'nombre_completo'
                            ],
                            [
                                'title' => __('Teléfono'),
                                'name' => 'Pacientes.telefono',
                                'data' => 'telefono'
                            ]
                        ]
                    ];
                    echo $this->DataTables->table('pacientes-table', $options, ['class' => 'table table-striped da-table']); ?>
                </div>
            </div>
        </div>
    </div>



