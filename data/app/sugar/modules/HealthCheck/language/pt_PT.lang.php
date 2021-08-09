<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Verificação de Integridade',
    'LBL_MODULE_NAME_SINGULAR' => 'Verificação de Integridade',
    'LBL_MODULE_TITLE' => 'Verificação de Integridade',
    'LBL_LOGFILE' => 'Ficheiro de registo',
    'LBL_BUCKET' => 'Recipiente',
    'LBL_FLAG' => 'Bandeira',
    'LBL_LOGMETA' => 'Meta-dados de registo',
    'LBL_ERROR' => 'Erro',

    // Failure handling in SugarBPM upgraders
    'LBL_PA_UNSERIALIZE_DATA_FAILURE' => 'Não foi possível anular a serialização dos dados serializados',
    'LBL_PA_UNSERIALIZE_OBJECT_FAILURE' => 'Não foi possível anular a serialização dos dados serializados uma vez que contêm referências a objetos ou classes',

    'LBL_SCAN_101_LOG' => '%s tem história do studio',
    'LBL_SCAN_102_LOG' => '%s tem extensões: %s',
    'LBL_SCAN_103_LOG' => '%s tem vardefs personalizadas',
    'LBL_SCAN_104_LOG' => '%s tem layoutdefs personalizadas',
    'LBL_SCAN_105_LOG' => '%s tem viewdefs personalizadas',

    'LBL_SCAN_201_LOG' => '%s não é um módulo de armazenamento',

    'LBL_SCAN_301_LOG' => '%s tem que ser executado como BWC',
    'LBL_SCAN_302_LOG' => 'Visualizações de ficheiro desconhecido - %s não é um módulo MB',
    'LBL_SCAN_303_LOG' => 'Ficheiro não vazio %s - %s não é um módulo MB',
    'LBL_SCAN_304_LOG' => 'Ficheiro desconhecido %s - %s não é um módulo MB',
    'LBL_SCAN_305_LOG' => 'Vardefs não conformes - chave %s, nome %s',
    'LBL_SCAN_306_LOG' => 'Vardefs não conformes - campo relacionado %s tem o atributo `module` vazio',
    'LBL_SCAN_307_LOG' => 'Vardefs não conformes - ligação %s refere-se a uma relação inválida',
    'LBL_SCAN_308_LOG' => 'Função HTML de um vardef em %s',
    'LBL_SCAN_309_LOG' => 'md5 não conforme para %s',
    'LBL_SCAN_310_LOG' => 'Ficheiro desconhecido %s/%s',
    'LBL_SCAN_311_LOG' => 'Função de HTML em vardef %s no módulo $module para o campo %s',
    'LBL_SCAN_312_LOG' => 'Vardefs não conformes - o tipo de campo &#39;nome&#39; é inválido &#39;%s&#39;, módulo - &#39;%s&#39;',
    'LBL_SCAN_313_LOG' => 'Extensão dir %s detectada - %s não é um módulo MB',
    'LBL_SCAN_314_LOG' => "Vardefs não conformes - campo multienum '%s' com chaves nas opções da lista '%s' com caracteres incompatíveis - '{%s}' no módulo %s",

    'LBL_SCAN_401_LOG' => 'Encontrada inclusão de ficheiros de fornecedor, para ficheiros que foram movidos para o fornecedor:'. PHP_EOL .'%s',
    'LBL_SCAN_402_LOG' => 'Módulo não conforme %s - não se encontra na beanList nem no sistema de ficheiros',
    'LBL_SCAN_403_LOG' => 'Inclusão específica de ficheiros Sugar encontrada para:' . PHP_EOL .'%s',
    'LBL_SCAN_520_LOG' => 'Detectado um logic hook after_ui_frame',
    'LBL_SCAN_521_LOG' => 'Detectado um logic hook after_ui_footer',
//    'LBL_SCAN_405_LOG' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_LOG' => '%s tem modos de exibição personalizados',
    'LBL_SCAN_407_LOG' => '%s tem modos de exibição personalizados',
    'LBL_SCAN_408_LOG' => 'Os componentes de ações de criação personalizados foram encontrados em %s. Estes componentes serão copiados e modificados para ampliar o componente de criação durante a atualização',
    'LBL_SCAN_519_LOG' => 'Detectada extensão dir %s',
    'LBL_SCAN_518_LOG' => 'customCode %s encontrado em %s, ficheiro %s',
    'LBL_SCAN_410_LOG' => 'Capacidade máxima de campos - Encontrados mais de %s campos (%s) em %s',
    'LBL_SCAN_522_LOG' => 'Encontrado &#39;get_subpanel_data&#39; com valor em &#39;função:&#39; em %s',
    'LBL_SCAN_412_LOG' => 'Subpainel %s não conforme em %s',
    'LBL_SCAN_413_LOG' => 'Detectado um widget class desconhecido: %s para %s',
    'LBL_SCAN_414_LOG' => 'Campos desconhecidos manuseados pelo CRYS-36, por isso não haverá mais verificações aqui',
    'LBL_SCAN_415_LOG' => 'Ficheiro hook não conforme em %s: %s',
    'LBL_SCAN_523_LOG' => 'Parâmetro by-ref em ficheiro hook %s na função %s',
    'LBL_SCAN_417_LOG' => 'Módulo %s incompatível',
    'LBL_SCAN_418_LOG' => 'Encontrado subpainel com link para um módulo não existente: %s no ficheiro %s',
    'LBL_SCAN_419_LOG' => 'Vardefs não conformes - chave %s, nome %s',
    'LBL_SCAN_420_LOG' => 'Vardefs não conformes - campo relacionado %s tem o atributo `module` vazio',
    'LBL_SCAN_421_LOG' => 'Vardefs não conformes - ligação %s refere-se a uma relação inválida',
    'LBL_SCAN_422_LOG' => 'O módulo %s tem a definição de outro módulo %s no ficheiro %s',
    'LBL_SCAN_525_LOG' => 'Função HTML de um vardef em %s',
    'LBL_SCAN_423_LOG' => 'Vardefs não conformes - %s refere-se a subcampos %s não conformes',
    'LBL_SCAN_424_LOG' => 'HTML encontrado em %s na linha %s',
    'LBL_SCAN_425_LOG' => 'Encontrado "echo" em %s na linha %s',
    'LBL_SCAN_426_LOG' => 'Encontrado "print" em %s na linha %s',
    'LBL_SCAN_427_LOG' => 'Encontrado "die/exit" em %s na linha %s',
    'LBL_SCAN_428_LOG' => 'Encontrado "print_r" em %s na linha %s',
    'LBL_SCAN_429_LOG' => 'Encontrado "var_dump" em %s na linha %s',
    'LBL_SCAN_430_LOG' => 'Encontrado um output buffering (%s) em %s na linha %s',
    'LBL_SCAN_451_LOG' => 'O código AuthN foi eliminado. Use em sua vez \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate. Ficheiros que usam o código eliminado: ' . PHP_EOL . '%s',
    'LBL_SCAN_524_LOG' => 'Função de HTML em vardef %s no %s módulo para o campo %s',
    'LBL_SCAN_432_LOG' => 'Vardefs não conformes - o tipo de campo &#39;nome&#39; é inválido &#39;%s&#39;, módulo - &#39;%s&#39;',
    'LBL_SCAN_526_LOG' => "Vardefs não conformes - campo multienum '%s' com chaves nas opções da lista '%s' com caracteres incompatíveis - '%s' no módulo %s",
    'LBL_SCAN_527_LOG' => "O nome da tabela no bean %s não corresponde com o atributo tabela em %s/vardefs.php",
    'LBL_SCAN_528_LOG' => 'Campo %s do módulo %s tem um valor de display_default inválido',
    'LBL_SCAN_529_LOG' => '%s: %s no ficheiro %s na linha %s',
    'LBL_SCAN_530_LOG' => 'Ficheiro personalizado em falta: %s',
    'LBL_SCAN_531_LOG' => 'Controlador da base de dados obsoleto: %s',
    'LBL_SCAN_532_LOG' => 'Uma classe em %s chama o construtor de origem do seu stock como %s::%s()',
    'LBL_SCAN_533_LOG' => 'Uma classe em %s chama o construtor de origem personalizado como %s::%s()',
    'LBL_SCAN_534_LOG' => 'Controlador da base de dados não suportado: %s',
    'LBL_SCAN_535_LOG' => 'Unsupported method call: %s() in %s on line %s',
    'LBL_SCAN_536_LOG' => 'Unsupported property access: $%s in %s on line %s',
    'LBL_SCAN_433_LOG' => 'Foram encontrados ficheiros personalizados de pesquisa Elastic %s',
    'LBL_SCAN_434_LOG' => 'Utilização de funções da matriz encontrada em $_SESSION nos ficheiros: %s',
    'LBL_SCAN_435_LOG' => 'O Class SugarSession foi removido da API, em vez disso utilize Sugarcrm\Sugarcrm\Session\SessionStorage. Ficheiros com código preterido: ' . PHP_EOL . '%s',
    'LBL_SCAN_550_LOG' => 'Use of removed Sidecar app.date APIs in %s',
    'LBL_SCAN_551_LOG' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_560_LOG' => 'custom/modules/Quotes/quotes.js PODE conter personalizações que não são compatíveis com novas Cotações.',
    'LBL_SCAN_561_LOG' => 'custom/modules/Quotes/EditView.js PODE conter personalizações que não são compatíveis com novas Cotações.',
    'LBL_SCAN_562_LOG' => 'Use of removed Sidecar app.view.invokeParent method in %s',
    'LBL_SCAN_570_LOG' => 'Estado e tipo de e-mails inválidos: estado=%s, tipo=%s',
    'LBL_SCAN_571_LOG' => 'O ficheiro obsoleto tem personalizações: %s',
    'LBL_SCAN_572_LOG' => 'O ficheiro personalizado tem conflito de nome: %s',
    'LBL_SCAN_573_LOG' => 'O ficheiro de ajuda personalizado tem conflito de nome: %s',
    'LBL_SCAN_574_LOG' => 'Existe um subpainel de e-mails no Diretório Personalizado: %s',
    'LBL_SCAN_575_LOG' => 'O subpainel de contactos para e-mails precisa ser alterado para usar o subpainel para e-mails de contactos arquivados: %s',
    'LBL_SCAN_576_LOG' => 'Foram detetadas personalizações do aspeto em: &#39;%s&#39;. O resultado final do aspeto pode não funcionar conforme o esperado, pelo que deve verificar as suas personalizações do aspeto.',
    'LBL_SCAN_580_LOG' => 'Removed jQuery function(s) detected in: `%s`.',
    'LBL_SCAN_585_LOG' => 'Detectada declaração proibida em `%s`: %s',

    'LBL_SCAN_501_LOG' => 'Ficheiro em falta: %s',
    'LBL_SCAN_502_LOG' => 'desfasamento no md5 de %s, esperado %s',
    'LBL_SCAN_503_LOG' => 'Módulo específico com o mesmo nome de um novo módulo do Sugar7: %s',
    'LBL_SCAN_504_LOG' => 'Tipo de Campo em falta no módulo %s: %s',
    'LBL_SCAN_505_LOG' => 'Alteração do tipo em %s para o campo %s: de %s a %s',
    'LBL_SCAN_506_LOG' => '$this utilizado em %s',
    'LBL_SCAN_507_LOG' => 'Vardefs não conformes - %s refere-se a subcampos %s não conformes',
    'LBL_SCAN_508_LOG' => 'HTML encontrado em %s na linha %s',
    'LBL_SCAN_509_LOG' => 'Encontrado "echo" em %s na linha %s',
    'LBL_SCAN_510_LOG' => 'Encontrado "print" em %s na linha %s',
    'LBL_SCAN_511_LOG' => 'Encontrado "die/exit" em %s na linha %s',
    'LBL_SCAN_512_LOG' => 'Encontrado "print_r" em %s na linha %s',
    'LBL_SCAN_513_LOG' => 'Encontrado "var_dump" em %s na linha %s',
    'LBL_SCAN_514_LOG' => 'Encontrado um output buffering (%s) em %s na linha %s',
    'LBL_SCAN_515_LOG' => 'Script falhou: %s',
    'LBL_SCAN_516_LOG' => 'Encontrados ficheiros anteriormente removidos referenciados em: %s',
    'LBL_SCAN_517_LOG' => 'Integração Incompatível - %s %s',
    'LBL_SCAN_540_LOG' => 'Reinicialização de Dados de Integração Incompatível - %s %s',
    'LBL_SCAN_541_LOG' => 'Serialização Inválida do SugarBPM – %s serialização(ões) inválida(s) na coluna %s da tabela %s: %s.',
    'LBL_SCAN_542_LOG' => 'Utilização Inválida do Campo do SugarBPM – %s campo(s) inválido(s) utilizado(s) em %s.',
    'LBL_SCAN_545_LOG' => 'Campo de agrupamento do SugarBPM parcialmente fechado - Campo %4$s bloqueado no grupo %s na Definição do Processo %s para o módulo %s.',
    'LBL_SCAN_546_LOG' => 'Personalizar a configuração da Base de Conhecimento TinyMCE',
    'LBL_SCAN_547_LOG' => 'Utilização da assinatura "resetLoadFlag" removida em %s',
    'LBL_SCAN_548_LOG' => 'Utilização do método "initButtons" obsoleto em %s',
    'LBL_SCAN_549_LOG' => 'Utilização da assinatura "getField" removida em %s',
    'LBL_SCAN_552_LOG' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_LOG' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_LOG' => 'Sidecar controller %s extends from removed Sidecar controller',

    'LBL_SCAN_901_LOG' => 'Instância já actualizada para o Sugar 7',
    'LBL_SCAN_903_LOG' => 'Versão de atualização não suportada. Por favor instale o pacote SugarUpgradeWizardPrereq apropriado',
    'LBL_SCAN_904_LOG' => 'Encontrados valores NULL em cadeias moduleList. Ficheiro: %s, Módulos: %s',
    'LBL_SCAN_999_LOG' => 'Falha desconhecida, por favor consultar o suporte',

    'LBL_SCAN_101_TITLE' => '%s tem história do studio',
    'LBL_SCAN_102_TITLE' => '%s tem extensões: %s',
    'LBL_SCAN_103_TITLE' => '%s tem vardefs personalizadas',
    'LBL_SCAN_104_TITLE' => '%s tem layoutdefs personalizadas',
    'LBL_SCAN_105_TITLE' => '%s tem viewdefs personalizadas',

    'LBL_SCAN_201_TITLE' => '%s não é um módulo de armazenamento',

    'LBL_SCAN_301_TITLE' => '%s tem que ser executado como BWC',
    'LBL_SCAN_302_TITLE' => 'Visualizações de ficheiro desconhecido - %s não é um módulo MB',
    'LBL_SCAN_303_TITLE' => 'Ficheiro não vazio %s - %s não é um módulo MB',
    'LBL_SCAN_304_TITLE' => 'Ficheiro desconhecido %s - %s não é um módulo MB',
    'LBL_SCAN_305_TITLE' => 'Vardefs não conformes - chave %s, nome %s',
    'LBL_SCAN_306_TITLE' => 'Vardefs não conformes - campo relacionado %s tem o atributo `module` vazio',
    'LBL_SCAN_307_TITLE' => 'Vardefs não conformes - ligação %s refere-se a uma relação inválida',
    'LBL_SCAN_308_TITLE' => 'Função HTML de um vardef em %s',
    'LBL_SCAN_309_TITLE' => 'md5 não conforme para %s',
    'LBL_SCAN_310_TITLE' => 'Ficheiro desconhecido %s/%s',
    'LBL_SCAN_311_TITLE' => 'Função de HTML em vardef %s no módulo $module para o campo %s',
    'LBL_SCAN_312_TITLE' => 'Vardefs não conformes - o tipo de campo &#39;nome&#39; é inválido &#39;%s&#39;, módulo - &#39;%s&#39;',
    'LBL_SCAN_313_TITLE' => 'Extensão dir %s detectada - %s não é um módulo MB',

    'LBL_SCAN_401_TITLE' => 'Encontrada inclusão de ficheiros de fornecedor, para ficheiros que foram movidos para o fornecedor:'. PHP_EOL .'%s',
    'LBL_SCAN_402_TITLE' => 'Módulo não conforme %s - não se encontra na beanList nem no sistema de ficheiros',
    'LBL_SCAN_403_TITLE' => 'Inclusão específica de ficheiros Sugar encontrada para:' . PHP_EOL .'%s',
    'LBL_SCAN_520_TITLE' => 'Detectado um logic hook after_ui_frame',
    'LBL_SCAN_521_TITLE' => 'Detectado um logic hook after_ui_footer',
//    'LBL_SCAN_405_TITLE' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_TITLE' => '%s tem modos de exibição personalizados',
    'LBL_SCAN_407_TITLE' => '%s tem modos de exibição personalizados',
    'LBL_SCAN_408_TITLE' => 'Os componentes de ações de criação personalizados foram encontrados, os quais já não são suportados.',
    'LBL_SCAN_519_TITLE' => 'Detectada extensão dir %s',
    'LBL_SCAN_518_TITLE' => 'customCode %s encontrado em %s, ficheiro %s',
    'LBL_SCAN_410_TITLE' => 'Capacidade máxima de campos - Encontrados mais de %s campos (%s) em %s',
    'LBL_SCAN_522_TITLE' => 'Encontrado &#39;get_subpanel_data&#39; com valor em &#39;função:&#39; em %s',
    'LBL_SCAN_412_TITLE' => 'Subpainel %s não conforme em %s',
    'LBL_SCAN_413_TITLE' => 'Detectado um widget class desconhecido: %s para %s',
    'LBL_SCAN_414_TITLE' => 'Campos desconhecidos manuseados pelo CRYS-36, por isso não haverá mais verificações aqui',
    'LBL_SCAN_415_TITLE' => 'Ficheiro hook não conforme em %s: %s',
    'LBL_SCAN_523_TITLE' => 'Parâmetro by-ref em ficheiro hook %s na função %s',
    'LBL_SCAN_417_TITLE' => 'Módulo %s incompatível',
    'LBL_SCAN_418_TITLE' => 'Encontrado subpainel com link para um módulo não existente: %s no ficheiro %s',
    'LBL_SCAN_419_TITLE' => 'Vardefs não conformes - chave %s, nome %s',
    'LBL_SCAN_420_TITLE' => 'Vardefs não conformes - campo relacionado %s tem o atributo `module` vazio',
    'LBL_SCAN_421_TITLE' => 'Vardefs não conformes - ligação %s refere-se a uma relação inválida',
    'LBL_SCAN_422_TITLE' => 'O módulo %s tem a definição de outro módulo',
    'LBL_SCAN_525_TITLE' => 'Função HTML de um vardef em %s',
    'LBL_SCAN_423_TITLE' => 'Vardefs não conformes - %s refere-se a subcampos %s não conformes',
    'LBL_SCAN_424_TITLE' => 'HTML encontrado em %s na linha %s',
    'LBL_SCAN_425_TITLE' => 'Encontrado "echo" em %s na linha %s',
    'LBL_SCAN_426_TITLE' => 'Encontrado "print" em %s na linha %s',
    'LBL_SCAN_427_TITLE' => 'Encontrado "die/exit" em %s na linha %s',
    'LBL_SCAN_428_TITLE' => 'Encontrado "print_r" em %s na linha %s',
    'LBL_SCAN_429_TITLE' => 'Encontrado "var_dump" em %s na linha %s',
    'LBL_SCAN_430_TITLE' => 'Encontrado um output buffering (%s) em %s na linha %s',
    'LBL_SCAN_451_TITLE' => 'O código AuthN foi eliminado. Use em sua vez \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate. Ficheiros que usam o código eliminado: ' . PHP_EOL . '%s',
    'LBL_SCAN_524_TITLE' => 'Função de HTML em vardef %s no %s módulo para o campo %s',
    'LBL_SCAN_432_TITLE' => 'Vardefs não conformes - o tipo de campo &#39;nome&#39; é inválido &#39;%s&#39;, módulo - &#39;%s&#39;',
    'LBL_SCAN_433_TITLE' => 'Foram encontrados ficheiros personalizados de pesquisa Elastic %s',
    'LBL_SCAN_434_TITLE' => 'Utilização de funções da matriz encontrada em $_SESSION nos ficheiros: %s',
    'LBL_SCAN_435_TITLE' => 'Utilização encontrada da classe SugarSession removida',
    'LBL_SCAN_550_TITLE' => 'Use of removed Sidecar app.date APIs in %s',
    'LBL_SCAN_551_TITLE' => 'Use of removed Sidecar Bean APIs in %s',

    'LBL_SCAN_501_TITLE' => 'Ficheiro em falta: %s',
    'LBL_SCAN_502_TITLE' => 'desfasamento no md5 de %s, esperado %s',
    'LBL_SCAN_503_TITLE' => 'Módulo específico com o mesmo nome de um novo módulo do Sugar7: %s',
    'LBL_SCAN_504_TITLE' => 'Tipo de Campo em falta no módulo %s: %s',
    'LBL_SCAN_505_TITLE' => 'Alteração do tipo em %s para o campo %s: de %s a %s',
    'LBL_SCAN_506_TITLE' => '$this utilizado em %s',
    'LBL_SCAN_507_TITLE' => 'Vardefs não conformes - %s refere-se a subcampos %s não conformes',
    'LBL_SCAN_508_TITLE' => 'HTML encontrado em %s na linha %s',
    'LBL_SCAN_509_TITLE' => 'Encontrado "echo" em %s na linha %s',
    'LBL_SCAN_510_TITLE' => 'Encontrado "print" em %s na linha %s',
    'LBL_SCAN_511_TITLE' => 'Encontrado "die/exit" em %s na linha %s',
    'LBL_SCAN_512_TITLE' => 'Encontrado "print_r" em %s na linha %s',
    'LBL_SCAN_513_TITLE' => 'Encontrado "var_dump" em %s na linha %s',
    'LBL_SCAN_514_TITLE' => 'Encontrado um output buffering (%s) em %s na linha %s',
    'LBL_SCAN_515_TITLE' => 'Script falhou: %s',
    'LBL_SCAN_517_TITLE' => 'Integração Incompatível - %s %s',
    'LBL_SCAN_526_TITLE' => "Vardefs não conformes - campo multienum '%s' com chaves nas opções da lista '%s' com caracteres incompatíveis - '%s' no módulo %s",
    'LBL_SCAN_528_TITLE' => 'Campo %s do módulo %s tem um valor de display_default inválido',
    'LBL_SCAN_529_TITLE' => '%s: %s no ficheiro %s na linha %s',
    'LBL_SCAN_530_TITLE' => 'Ficheiro personalizado em falta: %s',
    'LBL_SCAN_531_TITLE' => 'Controlador da base de dados obsoleto: %s',
    'LBL_SCAN_532_TITLE' => 'Chamada do construtor PHP4 de origem do stock em %s',
    'LBL_SCAN_533_TITLE' => 'Chamada do construtor PHP4 de origem personalizado em %s',
    'LBL_SCAN_534_TITLE' => 'Controlador da base de dados não suportado: %s',
    'LBL_SCAN_535_TITLE' => 'Unsupported method call: %s()',
    'LBL_SCAN_536_TITLE' => 'Unsupported property access: $%s',
    'LBL_SCAN_540_TITLE' => 'Reinicialização de Dados de Integração Incompatível - %s %s',
    'LBL_SCAN_541_TITLE' => 'Serialização Inválida do SugarBPM – %s serialização(ões) inválida(s) na coluna %s da tabela %s: %s',
    'LBL_SCAN_542_TITLE' => 'Utilização Inválida do Campo do SugarBPM – %s campo(s) inválido(s) utilizado(s) em %s.',
    'LBL_SCAN_545_TITLE' => 'Campo de agrupamento do SugarBPM parcialmente fechado - Módulo %3$s: O grupo %s está parcialmente bloqueado na Definição do Processo %s.',
    'LBL_SCAN_546_TITLE' => 'Personalizar a configuração da Base de Conhecimento TinyMCE',
    'LBL_SCAN_547_TITLE' => 'Utilização da assinatura "resetLoadFlag" removida em %s',
    'LBL_SCAN_548_TITLE' => 'Utilização do método "initButtons" obsoleto em %s',
    'LBL_SCAN_549_TITLE' => 'Utilização da assinatura "getField" removida em %s',
    'LBL_SCAN_552_TITLE' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_TITLE' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_TITLE' => 'Sidecar controller %s extends from removed Sidecar controller',
    'LBL_SCAN_570_TITLE' => 'Valores inesperados encontrados em e-mails',
    'LBL_SCAN_571_TITLE' => 'O ficheiro personalizado contém código que está obsoleto',
    'LBL_SCAN_572_TITLE' => 'Há um conflito de nome com um ficheiro personalizado',
    'LBL_SCAN_573_TITLE' => 'Há um conflito de nome com um ficheiro de ajuda personalizado',
    'LBL_SCAN_574_TITLE' => 'Existem personalizações para o subpainel de e-mails',
    'LBL_SCAN_575_TITLE' => 'Existem personalizações para o subpainel de contactos em e-mails',
    'LBL_SCAN_576_TITLE' => 'Foram detetadas personalizações do aspeto',
    'LBL_SCAN_580_TITLE' => 'Removed jQuery function(s) detected',
    'LBL_SCAN_585_TITLE' => 'Detectadas declarações proibidas',

    'LBL_SCAN_901_TITLE' => 'Instância já actualizada para o Sugar 7',
    'LBL_SCAN_903_TITLE' => 'Versão de actualização não suportada.',
    'LBL_SCAN_904_TITLE' => 'Encontrados valores NULL em cadeias moduleList',
    'LBL_SCAN_999_TITLE' => 'Falha desconhecida, por favor consultar o suporte',

    'LBL_SCAN_101_DESCR' => 'Configurações de Studio foram detectadas na sua instância. Não identificamos nenhum problema com estas configurações e as mesmas foram actualizadas para o Sugar7.',
    'LBL_SCAN_102_DESCR' => 'Configurações de Studio foram detectadas na sua instância. Não identificamos nenhum problema com estas configurações e as mesmas foram actualizadas para o Sugar7.',
    'LBL_SCAN_103_DESCR' => 'Configurações de Studio foram detectadas na sua instância. Não identificamos nenhum problema com estas configurações e as mesmas foram actualizadas para o Sugar7.',
    'LBL_SCAN_104_DESCR' => 'Configurações de Studio foram detectadas na sua instância. Não identificamos nenhum problema com estas configurações e as mesmas foram actualizadas para o Sugar7.',
    'LBL_SCAN_105_DESCR' => 'Configurações de Studio foram detectadas na sua instância. Não identificamos nenhum problema com estas configurações e as mesmas foram actualizadas para o Sugar7.',

    'LBL_SCAN_201_DESCR' => 'Configurações de Studio foram detectadas na sua instância. Não identificamos nenhum problema com estas configurações e as mesmas foram actualizadas para o Sugar7.',

    'LBL_SCAN_301_DESCR' => 'Algumas configurações foram detectadas e não foram migradas para o Sugar7. Este módulo (%s) irá continuar a estar disponível mas irá ser executado em modo de compatibilidade no Sugar7.',
    'LBL_SCAN_302_DESCR' => 'Ficheiros de views desconhecidos foram detectados e não foram migrados para o Sugar7. Este módulo (%s) irá continuar disponível mas será executada em modo de compatibilidade no Sugar7.',
    'LBL_SCAN_303_DESCR' => 'Ficheiro não vazios foram detectados e não foram migrados para o Sugar7. Este módulo (%s) irá continuar disponível mas apenas será executado em modo de compatibilidade no Sugar7.',
    'LBL_SCAN_304_DESCR' => 'Ficheiros desconhecidos (%s) foram detectados e não foram migrados para o Sugar7. Este módulo (%s) irá continuar disponível mas será executada em modo de compatibilidade no Sugar7.',
    'LBL_SCAN_305_DESCR' => 'Vardefs não conformes (%s: %s) foram detectadas e não foram migradas para o Sugar7. Esta configuração irá continuar disponível mas será executada em modo de compatibilidade no Sugar7.',
    'LBL_SCAN_306_DESCR' => 'Vardefs não conformes foram detectadas e não foram migradas para o Sugar7. Campo relacionado (%s) tem um `module` vazio). Esta configuração irá continuar disponível mas será executada em modo de compatibilidade no Sugar7.',
    'LBL_SCAN_307_DESCR' => 'Vardefs não conformes foram detectadas e não foram migradas para o Sugar7. O link (%s) é relativo a um relacionamento inválido. Esta configuração irá continuar disponível mas será executada em modo de compatibilidade no Sugar7.',
    'LBL_SCAN_308_DESCR' => 'Algumas configurações foram detectadas e não foram migradas para o Sugar7. Este módulo (%s) irá continuar a estar disponível mas irá ser executado em modo de compatibilidade no Sugar7. ',
    'LBL_SCAN_309_DESCR' => 'O hash md5 para %s não corresponde ao ficheiro de base. Este ficheiro foi modificado e não irá ser actualizado para o Sugar7',
    'LBL_SCAN_310_DESCR' => 'Ficheiros de views deconhecidas (%s) foram detectados e não migrados para o Sugar7. Este módulo (%s) irá continuar disponível mas apenas será executado em modo de compatibilidade no Sugar7.',
    'LBL_SCAN_311_DESCR' => 'Algumas configurações foram detectadas e não foram migradas para o Sugar7. Este módulo (%s) irá continuar a estar disponível mas irá ser executado em modo de compatibilidade no Sugar7. ',
    'LBL_SCAN_312_DESCR' => 'Vardefs não conformes foram detectadas e não foram migradas para o Sugar7. Vardefs não conformes: tipo de campo &#39;nome&#39; é inválido &#39;%s&#39; para o módulo &#39;%s&#39;. Esta configuração irá continuar disponível mas irá ser executada em modo de compatibilidade no Sugar7. ',
    'LBL_SCAN_313_DESCR' => 'O diretório de extensões foi detetado - %s não é um módulo do Construtor de Módulos. Este módulo irá continuar disponível mas apenas no modo de compatibilidade.',

    'LBL_SCAN_401_DESCR' => 'O ficheiro personalizado inclui um ficheiro que foi movido para o diretório fornecedor. Tentámos tomar uma ação corretiva e nenhuma outra ação é necessária. ',
    'LBL_SCAN_402_DESCR' => 'Módulo não conforme %s - não se encontra na beanList nem no sistema de ficheiros',
    'LBL_SCAN_403_DESCR' => 'Alguns dos ficheiros do Sugar mudaram de localização no Sugar 7. Deverá corrigir os caminhos inclusos.',
    'LBL_SCAN_520_DESCR' => 'Este logic hooj já não é mais suportado no Sugar7',
    'LBL_SCAN_521_DESCR' => 'Este logic hooj já não é mais suportado no Sugar7',
//    'LBL_SCAN_405_DESCR' => 'Package detected which has been blacklisted as not supported in Sugar 7',
    'LBL_SCAN_406_DESCR' => 'O módulo Armazenamento do Sugar tem vistas personalizadas não suportadas em personalizar/módulos/%s/vistas. Estes ficheiros de vistas personalizadas serão movidos para um diretório Desativado durante a atualização',
    'LBL_SCAN_407_DESCR' => 'O módulo Armazenamento do Sugar tem vistas personalizadas não suportadas em módulos/%s/vistas. Estes ficheiros de vistas personalizadas será movido para um diretório Desativado durante a atualização',
    'LBL_SCAN_408_DESCR' => 'Os componentes de ações de criação personalizados foram encontrados em %s. Estes componentes serão copiados e modificados para ampliar o componente de criação durante a atualização',
    'LBL_SCAN_519_DESCR' => 'O módulo Armazenamento do Sugar tem uma das extensões cuja atualização não é suportada, como encaminhamento personalizado, controlo de acesso, Javascript, etc.',
    'LBL_SCAN_518_DESCR' => 'Os vardefs incluem definições de customCode de utilizador que não sabemos como converter',
    'LBL_SCAN_410_DESCR' => 'Demasiados campos no modo de exibição',
    'LBL_SCAN_522_DESCR' => 'Dados do subpainel são obtidos através de uma função, ainda não suportamos esta actualização.',
    'LBL_SCAN_412_DESCR' => 'O subpainel refere-se a um link que não existe ou não está correctamente definido',
    'LBL_SCAN_413_DESCR' => 'O campo refere o nome de uma widget class que não tem um ficheiro correspondente',
    'LBL_SCAN_414_DESCR' => 'Campos desconhecidos manuseados pelo CRYS-36, por isso não haverá mais verificações aqui',
    'LBL_SCAN_415_DESCR' => 'O logic hook refere-se a um ficheiro que não existe',
    'LBL_SCAN_523_DESCR' => 'O ficheiro logic hook antigo utiliza a passagem de parâmetro por referência, o que pode levar a que sejam apresentadas mensagens de erro (e para além disso pode estragar o REST)',
    'LBL_SCAN_417_DESCR' => 'Detectado o módulo de Feeds ou iFrames, os quais já não deveriam existir',
    'LBL_SCAN_418_DESCR' => 'O subpainel refere-se a um módulo que não existe',
    'LBL_SCAN_419_DESCR' => 'A chave da vardef não corresponde com o nome da vardef',
    'LBL_SCAN_420_DESCR' => 'A vardef contem campos relacionados referindo uma relação que não pode ser corretamente carregada',
    'LBL_SCAN_421_DESCR' => 'A vardef contem campo relacionado que não pode ser corretamente carregado',
    'LBL_SCAN_422_DESCR' => 'O módulo %s tem a definição de outro módulo %s no ficheiro %s',
    'LBL_SCAN_525_DESCR' => 'O vardef define um enum que é o resultado de uma função HTML, que já não é suportado no Sugar7',
    'LBL_SCAN_423_DESCR' => 'A vardef está defenida como campos compostos contendo subcampos, e um desses subcampos na realidade não existe.',
    'LBL_SCAN_424_DESCR' => 'Ficheiro contém HTML',
    'LBL_SCAN_425_DESCR' => 'O código contém uma função que produz este resultado',
    'LBL_SCAN_426_DESCR' => 'O código contém uma função que produz este resultado',
    'LBL_SCAN_427_DESCR' => 'O código contém uma função que produz este resultado',
    'LBL_SCAN_428_DESCR' => 'O código contém uma função que produz este resultado. Note-se que print_r (..., true) é permitido.',
    'LBL_SCAN_429_DESCR' => 'O código contém uma função que produz este resultado',
    'LBL_SCAN_430_DESCR' => 'O código contém uma função que produz este resultado',
    'LBL_SCAN_451_DESCR' => 'O código AuthN foi eliminado. Use em sua vez \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate',
    'LBL_SCAN_524_DESCR' => 'O Campo está definido como uma função que produz HTML e não pode ser convertida automaticamente (sabemos como converter alguns campos de armazenamento como e-mails e moeda)',
    'LBL_SCAN_432_DESCR' => 'O Campo &#39;nome&#39; tem um tipo diferente de nome, nome completo, varchar ou ID',
    'LBL_SCAN_433_DESCR' => 'Foram encontrados ficheiros personalizados de pesquisa Elastic %s',
    'LBL_SCAN_434_DESCR' => 'Utilização de funções da matriz encontrada em $_SESSION nos ficheiros: %s',
    'LBL_SCAN_550_DESCR' => 'Use of removed Sidecar app.date APIs in %s, this code will be migrated by upgrade scripts',
    'LBL_SCAN_551_DESCR' => 'Use of removed Sidecar Bean APIs in %s, this code will be migrated by upgrade scripts',

    'LBL_SCAN_501_DESCR' => 'Um dos ficheiros nucleares não se encontra presente nesta instância',
    'LBL_SCAN_502_DESCR' => 'Um dos ficheiros nucleares foi modificado nesta instalação',
    'LBL_SCAN_503_DESCR' => 'Módulo específico tem o mesmo nome que um dos novos módulos do Sugar',
    'LBL_SCAN_504_DESCR' => 'A definição do campo Vardef omite o tipo',
    'LBL_SCAN_505_DESCR' => 'Campo do tipo non-blob é alterado para campo do tipo blob. Isto não é permitido porque o tipo blob não pode ser indexado e poderemos ter filtros que se baseiam na indexação deste campo.',
    'LBL_SCAN_506_DESCR' => '$this é utilizado no ficheiro de metadata. Como o ficheiro de metadata é carregado num contexto diferente no Sugar7, isto iria falhar.',
    'LBL_SCAN_507_DESCR' => 'A vardef está defenida como campos compostos contendo subcampos, e um desses subcampos na realidade não existe.',
    'LBL_SCAN_508_DESCR' => 'Ficheiro contém HTML',
    'LBL_SCAN_509_DESCR' => 'O código contém uma função que produz este resultado',
    'LBL_SCAN_510_DESCR' => 'O código contém uma função que produz este resultado',
    'LBL_SCAN_511_DESCR' => 'O código contém uma função que produz este resultado',
    'LBL_SCAN_512_DESCR' => 'O código contém uma função que produz este resultado. Note-se que print_r (..., true) é permitido.',
    'LBL_SCAN_513_DESCR' => 'O código contém uma função que produz este resultado',
    'LBL_SCAN_514_DESCR' => 'O código contém uma função que produz este resultado',
    'LBL_SCAN_515_DESCR' => 'O script de validação falhou, o que significa que o instaScannerMeta.phpnce provavelmente contém código PHP não conforme que o script tentou carregar.',
    'LBL_SCAN_517_DESCR' => 'Detectado um pacote que foi colocado em lista negra como não suportado em Sugar7',
    'LBL_SCAN_526_DESCR' => "Esta lista contem valores de nomes de item que impedem a actualização.",
    'LBL_SCAN_528_DESCR' => 'Campo Data/Data e Hora/Hora com o valor display_default incorrecto como -none-',
    'LBL_SCAN_529_DESCR' => 'Erros de PHP poderão ser desencadeados pelo interpretador quando é encontrada sintaxe incorrecta de php ou problemas de código em run-time.',
    'LBL_SCAN_530_DESCR' => 'Um ou mais ficheiros personalizados não estão presentes na instância, mas é usado por código personalizado.',
    'LBL_SCAN_531_DESCR' => 'O controlador da base de dados %s é obsoleto. Por favor, considere a utilização de %s.',
    'LBL_SCAN_532_DESCR' => 'Uma classe declarada em %s chama o construtor de origem do seu stock como %s::%s()',
    'LBL_SCAN_533_DESCR' => 'Uma classe declarada em %s chama o construtor de origem personalizado como %s::%s()',
    'LBL_SCAN_534_DESCR' => 'O controlador da base de dados %s já não é suportado. Por favor, considere a utilização de %s.',
    'LBL_SCAN_535_DESCR' => 'A call to unsupported method %s() found in %s on line %d',
    'LBL_SCAN_536_DESCR' => 'Access to an unsupported property $%s found in %s on line %d',
    'LBL_SCAN_540_DESCR' => 'O pacote detectado encontra-se catalogado na lista negra como não sendo suportado pela versão Sugar alvo. Estes pacotes necessitam ser desinstalados E apagados antes da actualização. Tenha em atenção que a desinstalação destes pacotes irá remover tabelas e dados gerados pelo pacote e pela utilização dos módulos do pacote.',
    'LBL_SCAN_541_DESCR' => 'Foram detetados dados nas tabelas da Gestão do Processo que não podem ter a serialização anulada nem podem ser convertidos',
    'LBL_SCAN_542_DESCR' => 'Foram encontrados campos inválidos nas Regras de Negócio da Gestão do Processo e/ou Ações. Estes campos têm de ser removidos das Regras de Negócio e/ou Ações para efetuar a atualização.',
    'LBL_SCAN_545_DESCR' => 'Um campo de agrupamento está parcialmente bloqueado numa Definição do Processo. Estes campos devem estar desbloqueados na Definição do Processo para prosseguir a atualização.',
    'LBL_SCAN_546_DESCR' => 'Não é possível migrar a configuração TinyMCE no módulo de Base de Conhecimento. '
        . 'O parâmetro "tinyConfig" no ficheiro %s vai ser esvaziado. '
        . 'Se dispõe aí de quaisquer personalizações TinyMCE, deve guardá-las antes da atualização '
        . 'e adicionar manualmente após a atualização.',
    'LBL_SCAN_547_DESCR' => 'Utilização da assinatura "resetLoadFlag" removida em %s',
    'LBL_SCAN_548_DESCR' => 'Utilização do método "initButtons" obsoleto em %s',
    'LBL_SCAN_549_DESCR' => 'Utilização da assinatura "getField" removida em %s',
    'LBL_SCAN_552_DESCR' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_DESCR' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_DESCR' => 'Sidecar controller %s extends from removed Sidecar controller',

    'LBL_SCAN_901_DESCR' => 'Instância já actualizada para o Sugar 7',
    'LBL_SCAN_903_DESCR' => 'Versão de atualização não suportada. Por favor instale o pacote SugarUpgradeWizardPrereq apropriado',
    'LBL_SCAN_904_DESCR' => 'Ficheiro: %s, Módulos: %s',
    'LBL_SCAN_999_DESCR' => 'Falha desconhecida, por favor consultar o suporte',

    'LBL_SCAN_577_TITLE' => 'Agrupamento de base de dados incompatível',
    'LBL_SCAN_577_LOG' => "O agrupamento '%s' é incompatível com o conjunto de caracteres '%s'",
    'LBL_SCAN_577_DESCR' => "Escolha um agrupamento diferente nas suas configurações de localidade ou remova a configuração \"dbconfigoption.collation\" para usar o agrupamento padrão.",

    'LBL_SCAN_578_TITLE' => 'Não é possível remover a tabela da base de dados temporária: %s',
    'LBL_SCAN_578_LOG' => 'Não é possível remover a tabela da base de dados temporária: %s',
    'LBL_SCAN_578_DESCR' => 'Não foi possível eliminar uma tabela temporária criada para a conversão do conjunto de caracteres de verificação segura durante a atualização, pelo que é necessário eliminá-la manualmente',

    'LBL_SCAN_579_TITLE' => 'Não é possível realizar a conversão do agrupamento/conjunto de caracteres: (%s) na tabela: %s',
    'LBL_SCAN_579_LOG' => 'Não é possível realizar a conversão do agrupamento/conjunto de caracteres: (%s) na tabela: %s',
);
