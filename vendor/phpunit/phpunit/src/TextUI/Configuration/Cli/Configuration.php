<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\CliArguments;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class Configuration
{
    /**
     * @psalm-var list<non-empty-string>
     */
    private readonly array $arguments;
    private readonly ?string $atLeastVersion;
    private readonly ?bool $backupGlobals;
    private readonly ?bool $backupStaticProperties;
    private readonly ?bool $beStrictAboutChangesToGlobalState;
    private readonly ?string $bootstrap;
    private readonly ?string $cacheDirectory;
    private readonly ?bool $cacheResult;
    private readonly ?string $cacheResultFile;
    private readonly bool $checkVersion;
    private readonly ?string $colors;
    private readonly null|int|string $columns;
    private readonly ?string $configurationFile;
    private readonly ?array $coverageFilter;
    private readonly ?string $coverageClover;
    private readonly ?string $coverageCobertura;
    private readonly ?string $coverageCrap4J;
    private readonly ?string $coverageHtml;
    private readonly ?string $coveragePhp;
    private readonly ?string $coverageText;
    private readonly ?bool $coverageTextShowUncoveredFiles;
    private readonly ?bool $coverageTextShowOnlySummary;
    private readonly ?string $coverageXml;
    private readonly ?bool $pathCoverage;
    private readonly ?string $coverageCacheDirectory;
    private readonly bool $warmCoverageCache;
    private readonly ?int $defaultTimeLimit;
    private readonly ?bool $disableCodeCoverageIgnore;
    private readonly ?bool $disallowTestOutput;
    private readonly ?bool $enforceTimeLimit;
    private readonly ?array $excludeGroups;
    private readonly ?int $executionOrder;
    private readonly ?int $executionOrderDefects;
    private readonly ?bool $failOnDeprecation;
    private readonly ?bool $failOnEmptyTestSuite;
    private readonly ?bool $failOnIncomplete;
    private readonly ?bool $failOnNotice;
    private readonly ?bool $failOnRisky;
    private readonly ?bool $failOnSkipped;
    private readonly ?bool $failOnWarning;
    private readonly ?bool $stopOnDefect;
    private readonly ?bool $stopOnDeprecation;
    private readonly ?bool $stopOnError;
    private readonly ?bool $stopOnFailure;
    private readonly ?bool $stopOnIncomplete;
    private readonly ?bool $stopOnNotice;
    private readonly ?bool $stopOnRisky;
    private readonly ?bool $stopOnSkipped;
    private readonly ?bool $stopOnWarning;
    private readonly ?string $filter;
    private readonly ?string $generateBaseline;
    private readonly ?string $useBaseline;
    private readonly bool $ignoreBaseline;
    private readonly bool $generateConfiguration;
    private readonly bool $migrateConfiguration;
    private readonly ?array $groups;
    private readonly ?array $testsCovering;
    private readonly ?array $testsUsing;
    private readonly bool $help;
    private readonly ?string $includePath;
    private readonly ?array $iniSettings;
    private readonly ?string $junitLogfile;
    private readonly bool $listGroups;
    private readonly bool $listSuites;
    private readonly bool $listTests;
    private readonly ?string $listTestsXml;
    private readonly ?bool $noCoverage;
    private readonly ?bool $noExtensions;
    private readonly ?bool $noOutput;
    private readonly ?bool $noProgress;
    private readonly ?bool $noResults;
    private readonly ?bool $noLogging;
    private readonly ?bool $processIsolation;
    private readonly ?int $randomOrderSeed;
    private readonly ?bool $reportUselessTests;
    private readonly ?bool $resolveDependencies;
    private readonly ?bool $reverseList;
    private readonly ?bool $stderr;
    private readonly ?bool $strictCoverage;
    private readonly ?string $teamcityLogfile;
    private readonly ?bool $teamCityPrinter;
  ﻿<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<LanguageResource Id="PTG" Name="Portuguese" LocaleName="Português" Version="1.1" LangID="0x0816" CodePage="1252" NameOrder="GivenFamilyName">
  <Default>
    <Font Name="Segoe UI" Size="9.5"/>
    <FontMapping>
      <Item From="Open Sans" To="Segoe UI" FailTo="Tahoma" />
      <Item From="Open Sans Semibold" To="Segoe UI Semibold" FailTo="Tahoma" />
      <Item From="Tahoma" To="Segoe UI" FailTo="Tahoma" />
	  <Item From="Arial" To="Segoe UI" FailTo="Tahoma" />
    </FontMapping>
    <Link Color="51, 133, 208" ActiveColor="5, 91, 169" VisitedColor="46, 128, 203" />
  </Default>
  <Strings>
    <!--MessageBox-->
    <INF_Yes>sim</INF_Yes>
    <INF_No>não</INF_No>
    <INF_OK>OK</INF_OK>
    <INF_Cancel>Cancelar</INF_Cancel>
    <INF_Close>Fechar</INF_Close>
    <INF_Back>Sair</INF_Back>
    <INF_Stop>Parar</INF_Stop>
    <INF_Exit>Sair</INF_Exit>
    <INF_Next>Próximo</INF_Next>
    <INF_Start>Iniciar</INF_Start>
    <INF_Retry>Tentar de novo</INF_Retry>
    <INF_Rescan>Escanear Novamente</INF_Rescan>
    <INF_MessageFormTitle>Informações</INF_MessageFormTitle>
	<INF_Information>Informações</INF_Information>
		<!-- start WSid-->
		<INF_NetworkError>Erro de rede, por favor verifique a sua conexão de rede e experimente novamente.</INF_NetworkError>
	<INF_WSIDHi>Olá</INF_WSIDHi>
	<INF_WSIDbtnBuy>Comprar</INF_WSIDbtnBuy>
	<INF_WSIDlbLogout>Sair</INF_WSIDlbLogout>
	<INF_WSIDlbPurchaseInfo>Você comprou {0} licenças</INF_WSIDlbPurchaseInfo>
	<INF_WSIDLogoutConfirm>Quando você sai do(s) aplicativo(s), este voltará à versão teste até que você entre novamente. Entre para reativar seu software. Deseja sair? </INF_WSIDLogoutConfirm>
	<INF_WSIDYes>Sim</INF_WSIDYes>
    <INF_WSIDNo>Não</INF_WSIDNo>
    <INF_WSIDOK>OK</INF_WSIDOK>
    <INF_WSIDCancel>Cancelar</INF_WSIDCancel>
    <INF_WSIDReTry>Tentar novamente</INF_WSIDReTry>
    <INF_WSIDInformation>Informações</INF_WSIDInformation>
    <INF_WSIDError>Erro</INF_WSIDError>
	<INF_WSIDLifeTime>Plano perpétuo</INF_WSIDLifeTime>
    <INF_WSIDValidUntil>Válida até</INF_WSIDValidUntil>
	<INF_WSIDPurchased>Comprado</INF_WSIDPurchased>
    <INF_WSIDUsed>Utilizado</INF_WSIDUsed>
    <INF_WSIDRemaining>Restante</INF_WSIDRemaining>
	<INF_WSIDDevice> dispositivos</INF_WSIDDevice>
	
	<INF_WSIDInputEmail>Insira seu endereço de email correto, por favor .</INF_WSIDInputEmail>
	<INF_InputPassword>Insira sua senha, por favor.</INF_InputPassword>
	<INF_WSIDPCOverLimit>O número de computadores excede o limite. Se quiser continuar a usá-lo, você precisará comprá-lo novamente. Se você tiver alguma dúvida, entre em contato conosco.</INF_WSIDPCOverLimit>
	<INF_WSIDAccountNotExist>Conta não existe.</INF_WSIDAccountNotExist>
	<INF_WSIDInvalidEmail>O formato do email está incorreto.</INF_WSIDInvalidEmail>
	<INF_WSIDCallExceed>O número de chamadas excede o limite (500 vezes por hora)</INF_WSIDCallExceed>
	<INF_WSIDWrongPassword>Password incorrect.</INF_WSIDWrongPassword>
	<INF_WSIDMoreErrorPassword>Digite a senha errada mais de 5 vezes, verifique e tente novamente.</INF_WSIDMoreErrorPassword>
	<INF_WSIDActiveCodeError>O código de ativação não existe.</INF_WSIDActiveCodeError>
	<INF_WSIDInvaldeFormatPassword>O formato da senha está incorreto. A senha deve ter de 6 a 32 dígitos e conter letras e números.</INF_WSIDInvaldeFormatPassword>
	<INF_WSIDAccountExist>Essa conta já existe.</INF_WSIDAccountExist>
	<INF_LoginFailed>Falha no login, tente novamente.</INF_LoginFailed>
	<INF_WSIDIOSVirtualLocation>Dr.Fone - Localização Virtual</INF_WSIDIOSVirtualLocation>
	<INF_WSIDIOSVirtualLocationDescription>Mude a localização de GPS para dispositivo iOS/Android.</INF_WSIDIOSVirtualLocationDescription>
	<INF_WSIDAndroidRepair>Dr.Fone - Reparação do Sistema (Android)</INF_WSIDAndroidRepair>
	<INF_WSIDAndroidRepairDescription>Corrija problemas do Android, como travamento de celular, tela preta, falha na atualização do celular etc.</INF_WSIDAndroidRepairDescription>
	<INF_WSIDiTunesRepair>Dr.Fone - Reparação de iTunes</INF_WSIDiTunesRepair>
	<INF_WSIDiTunesRepairDescription>Repare erros do iTunes, problemas de conexão e problemas de sincronização.</INF_WSIDiTunesRepairDescription>
	<INF_WSIDWhatsAppTransfer>Dr.Fone - Transferência do WhatsApp</INF_WSIDWhatsAppTransfer>
	<INF_WSIDWhatsAppTransferDescription>Transfira dados do WhatsApp de um celular para outro. Faça o backup do WhatsApp e de outros aplicativos sociais para o PC.</INF_WSIDWhatsAppTransferDescription>
	<INF_WSIDIOSScrrenUnlock>Dr.Fone - Desbloquear Tela (iOS)</INF_WSIDIOSScrrenUnlock>
	<INF_WSIDIOSScrrenUnlockDescription>Remova o bloqueio da tela e o ID da Apple dos seus dispositivos iOS.</INF_WSIDIOSScrrenUnlockDescription>
	<INF_WSIDAndroidScrrenUnlock>Dr.Fone - Desbloquear Tela (Android)</INF_WSIDAndroidScrrenUnlock>
	<INF_WSIDAndroidScrrenUnlockDescription>Remova o padrão da tela de bloqueio do Android, o PIN, a impressão digital e a senha .</INF_WSIDAndroidScrrenUnlockDescription>
	<INF_WSIDIOSRepair>Dr.Fone - Reparação do Sistema (iOS)</INF_WSIDIOSRepair>
	<INF_WSIDIOSRepairDescription>Corrija problemas de dispositivos iOS, como presos no logotipo da apple,  loop do modo de recuperação, tela preta, tela branca ou outros.</INF_WSIDIOSRepairDescription>
	<INF_WSIDAndridEraser>Dr.Fone - Eliminador de Dados (Android)</INF_WSIDAndridEraser>
	<INF_WSIDAndridEraserDescription>Apague todos os dados no Android.</INF_WSIDAndridEraserDescription>
	<INF_WSIDIOSEraser>Dr.Fone - Eliminador de Dados (iOS)</INF_WSIDIOSEraser>
	<INF_WSIDIOSEraserDescription>Apague todos os dados no iPhone.</INF_WSIDIOSEraserDescription>
	<INF_WSIDAndroidBackup>Dr.Fone - Backup do Celular (Android)</INF_WSIDAndroidBackup>
	<INF_WSIDAndroidBackupDescription>Faça backup e restaure dados do Android, incluindo contatos, mensagens, fotos e muito mais.</INF_WSIDAndroidBackupDescription>
	<INF_WSIDIOSBackup>Dr.Fone - Backup do Celular</INF_WSIDIOSBackup>
	<INF_WSIDIOSBackupDescription>Faça backup e restaure dados do iPhone, incluindo contatos, mensagens, fotos e muito mais.</INF_WSIDIOSBackupDescription>
	<INF_WSIDPhoneTransfer>Dr.Fone - Transferir Celular (iOS)</INF_WSIDPhoneTransfer>
	<INF_WSIDIOSPhoneTransfer>Dr.Fone - Transferir Celular</INF_WSIDIOSPhoneTransfer>
	<INF_WSIDPhoneTransferDescription>Transfira dados de um celular para outro.</INF_WSIDPhoneTransferDescription>
	<INF_WSIDAndroidManager>Dr.Fone - Gerenciador de Celular (Android)</INF_WSIDAndroidManager>
	<INF_WSIDAndroidManagerDescription>Gerencie dados do Android e transfira dados entre o Android e o computador.</INF_WSIDAndroidManagerDescription>
	<INF_WSIDIOSManager>Dr.Fone - Gerenciador de Celular (iOS)</INF_WSIDIOSManager>
	<INF_WSIDIOSManagerDescription>Gerencie dados do iOS e transfira dados entre o iPhone e o computador.</INF_WSIDIOSManagerDescription>
	<INF_WSIDAndroidRecover>Dr.Fone - Recuperação de Dados (Android)</INF_WSIDAndroidRecover>
	<INF_WSIDAndroidRecoverDescription>Recupere dados excluídos de dispositivos Android como contatos, mensagens, fotos.</INF_WSIDAndroidRecoverDescription>
	<INF_WSIDIOSRecover>Dr.Fone - Recuperação de Dados (iOS)</INF_WSIDIOSRecover>
	<INF_WSIDIOSRecoverDescription>Recupere dados excluídos de dispositivos iOS como contatos, mensagens, fotos.</INF_WSIDIOSRecoverDescription>
	<INF_WSIDPasswordManager>Dr.Fone - Password Manager</INF_WSIDPasswordManager>
	<INF_WSIDPasswordManagerDescription>Encontre várias senhas e dados no dispositivo</INF_WSIDPasswordManagerDescription>
	<INF_Toolkit>Dr.Fone Versão Básica</INF_Toolkit>
<INF_ToolkitDescription>Solução de gestão de dados móveis iOS &amp; Android de uma paragem</INF_ToolkitDescription>
	<!--WSid end-->
    <INF_PasswordManagerTitle>Password Manager</INF_PasswordManagerTitle>
    <INF_DeviceModel>&lt;b&gt;Nome:&lt;/b&gt; {0}  
&lt;b&gt;Modelo:&lt;/b&gt; {1}</INF_DeviceModel>
	<INF_setBackupPasswordTips>Os dispositivos que executam o iOS 13 e sistemas posteriores precisam definir uma senha de backup para encontrar os dados da senha. Este programa definirá uma senha temporária (password: a) para obter os dados. Esta senha será removida depois que a verificação for concluída.
	  
Você quer iniciar a digitalização dos dados?
    </INF_setBackupPasswordTips>
	<INF_StartScan>Digitalizar</INF_StartScan>
	<INF_ScanRemainTime>A digitalização levará cerca de {0} minutos devido a uma grande quantidade de dados em seu dispositivo. Por favor, aguarde.  </INF_ScanRemainTime>
	<INF_DeviceRemoved>Falha na digitalização! Por favor, reconecte o dispositivo e tente novamente.</INF_DeviceRemoved>
	<INF_ScanCancelTip>A digitalização ainda não terminou, você tem certeza de que quer sair?</INF_ScanCancelTip>
	<INF_QuitScan>Sair</INF_QuitScan>
	<INF_ScanRuninBackground>Executar em segundo plano</INF_ScanRuninBackground>
	<!--scan-->
	<INF_PasswordFoundIn>Senhas encontradas em: {0}({1})</INF_PasswordFoundIn>
	<INF_ScanModelInfo>Tempo de Digitalização: {0}     |     Nome: {1}    |     Modelo: {2}</INF_ScanModelInfo>
	
	<INF_ScreenTimePasswordItem>Código de Acesso à Tela</INF_ScreenTimePasswordItem>
	<INF_ScreenTimePasswordDevice>Nome e Modelo do Dispositivo</INF_ScreenTimePasswordDevice>
	<INF_Password>Senha</INF_Password>
	<INF_CreateTime>Tempo de Criação</INF_CreateTime>
	<INF_ModifiedTime>Tempo de Modificação</INF_ModifiedTime>
	
	<INF_WifiAccountItem>Conta Wi-Fi</INF_WifiAccountItem>
	<INF_WifiAccountNameItem>Item</INF_WifiAccountNameItem>
	
	<INF_WebsitItem>Senha do Website e App</INF_WebsitItem>
	<INF_WebsitAddressItem>Website</INF_WebsitAddressItem>
	<INF_AccountItem>Conta</INF_AccountItem>
	
	<INF_MailAccountItem>Conta de Email</INF_MailAccountItem>
	<INF_MailAccountProtol>Protocolo</INF_MailAccountProtol>

	<INF_CreditCardItem>Cartão de Crédito</INF_CreditCardItem>
	<INF_CreditCardNameItem>Nome do Cartão</INF_CreditCardNameItem>
	<INF_CreditCardHolderItem>Nome do Titular do Cartão</INF_CreditCardHolderItem>
	<INF_CreditCardNumberItem>Número do Cartão</INF_CreditCardNumberItem>
	<INF_CreditCardExpiredItem>Tempo de Expiração</INF_CreditCardExpiredItem>
	
	<INF_AppleIDItem>ID da Apple</INF_AppleIDItem>
	
   <INF_TrialRegister>Cadastre-se</INF_TrialRegister>
   <INF_TrialActive>Ativado</INF_TrialActive>
   
   <INF_BackupScanHeader>Dispositivo</INF_BackupScanHeader>
   <INF_BackupTimeHeader>Tempo de Digitalização</INF_BackupTimeHeader>
   <INF_BackupOperateHeader>Operação</INF_BackupOperateHeader>
   <INF_ViewBackup>Ver</INF_ViewBackup>
   <INF_DeleteBackupTips>Você tem certeza de que quer apagar este registro?</INF_DeleteBackupTips>
   <INF_Delete>Apagar</INF_Delete>
   <INF_SelectDataToExport>Selecione os dados a serem exportados.</INF_SelectDataToExport>
   <INF_SendEmailSucces>Submetido com sucesso.</INF_SendEmailSucces>
   <INF_PiracyNetWorkDesc>Erro de rede. Verifique a rede e tente novamente.</INF_PiracyNetWorkDesc>
	<INF_CloseProgress>Mensagem: O programa está anormal e o programa será encerrado automaticamente.</INF_CloseProgress>
	<INF_AuthoFailed>Erro de autorização, efetue login novamente.</INF_AuthoFailed>
	<!--Remove iTunes Password-->
    <INF_RemoveCheck>Verificando</INF_RemoveCheck>
    <INF_CloseFindmy>Nota:Certifique-se de que a opção &quot;Encontrar Meu iPhone&quot; esteja desligada.</INF_CloseFindmy>
    <INF_Removing>Removendo a senha do iTunes backup. Aguarde …</INF_Removing>
    <INF_TipsReboot>Nota: No processo de remoção, iremos reiniciar o seu dispositivo.</INF_TipsReboot>
    <INF_RemoveSuccess>Removida com sucesso.</INF_RemoveSuccess>
    <INF_ReBoot>Reiniciando</INF_ReBoot>
    <INF_RemoveBack>Voltar para verificar novamente</INF_RemoveBack>
    <INF_RemoveFail>Falha ao remover a senha do itunes, Clique em repetir ou entre em contato.</INF_RemoveFail>
    <INF_RemoveContact>Fale Conosco</INF_RemoveContact>
    <INF_RemoveRetry>Tentar novamente</INF_RemoveRetry>
	<INF_findmyRecheck>Verificar Novamente</INF_findmyRecheck>
    <INF_findmyTurnedOff>Sim, desligado</INF_findmyTurnedOff>
	<INFS_Backup_Failed_No_Space>Não há espaço suficiente disponível no disco para completar esta operação. Espaço necessário em torno de {0}</INFS_Backup_Failed_No_Space>
	<INFS_Backup_Failed_No_Space2>Espaço em disco insuficiente, altere o caminho de salvamento de backup e tente novamente.</INFS_Backup_Failed_No_Space2>
<!--Remove iTunes Password End-->

  </Strings>
  <Forms>
     <MainForm>
	  <btnLogin ToolTip="Entrar" />
      <btnBuyNow ToolTip="Comprar agora" />
      <btnSettings ToolTip="Definições" />
	   <tsFeedback Text="Feedback" />
	   <miFAQ Text="Centro de Suporte" />
	</MainForm>
	<ConnectFailedPage>
	   <lblTitle Text="Falha na conexão!" />
	   <lblNote Text="Observação:
1.Reinicie e conecte novamente o seu dispositivo.
2.Se o dispositivo estiver a funcionar indevidamente após o restauro, pode experimentar o software dr.fone - Reparar iOS para reparar." />
     <lblNavigatorRepair Text="Todos os métodos falharam? Tente usar o &lt;a&gt;Dr.Fone - System Repair (iOS)&lt;/a&gt; para consertar seu dispositivo." />
	  <lblUnDevice Text="O dispositivo não foi detectado?" />
	  <btnTry Text="Tentar novamente" />
	</ConnectFailedPage>
	<WelcomePage>
	  <lblTitle Text="Por favor, conecte seu dispositivo iOS ao PC" />
	  <lblDes Text="Suporta a digitalização das senhas de Wi-Fi salvas, login de aplicativos e websites, e-mails e ID da Apple em seu dispositivo." />
	  <lblNote Text="Observação:
1. Certifique-se de ter desbloqueado a tela do dispositivo.
2. Por favor, verifique a conexão USB." />
	  <lblUnDevice Text="O dispositivo não foi detectado?" />
	  <lblBackups Text="Para visualizar os registros de varredura anteriores>>" />
	</WelcomePage>
	 <ConnectingPage>
	  <lblTitle Text="Conectando..." />
	  <lblDes Text="Por favor, mantenha seu dispositivo conectado" />
	</ConnectingPage>
	<DeviceDetectedPage>
	  <lbNoDeviceTitle Text="Não foi detectado nenhum dispositivo. Por favor, verifique através dos seguintes passos e tente novamente." />
	  <lbUnlockIOS Text="Desbloqueie seu dispositivo" />
	  <lbCheckiTunes Text="Reinstale os produtos Dr.Fone" />
	  <lbRebootDevice Text="Por favor, mude para outro cabo USB ou porta USB do computador" />
	  <lbCheckUsb Text="Selecione &quot;Confiar&quot; na tela do dispositivo" />
	  <lblNavigatorRepair Text="Todos os métodos falharam? Tente usar o &lt;a&gt;Dr.Fone - System Repair (iOS)&lt;/a&gt; para consertar seu dispositivo." />
	</DeviceDetectedPage>
	<UnDetectIOSForm>
	 <lblTitle Text="Esta funcionalidade só suporta dispositivos iOS, ainda não suporta dispositivos Android. Fique atento e aprenda mais sobre as outras ferramentas do Dr. Fone." />
	 <btnOk Text="Explorar" />
	</UnDetectIOSForm>
	<OtherTrustPage>
	  <lblTitle Text="Você tem que &quot;confiar&quot; no PC para realizar o escaneamento de seus dados. Por favor, siga as instruções abaixo." />
	</OtherTrustPage>
	<ConfirmPage>
	 <lblTitle Text="Identifique a senha da conta em seu dispositivo iOS com um clique" />
	 <lblStep Text="Suporta a digitalização das senhas de Wi-Fi salvas, login de aplicativos e websites, e-mails e ID da Apple em seu dispositivo." />
	 <lblNote Text="Observação: Por favor, saiba que o Dr.Fone nunca revelará suas senhas digitalizadas, que serão salvas apenas em seu computador local." />
	 <btnStart Text="Iniciar a digitalização" />
	 <lblBackups Text="Para ver os registros de digitalização anteriores>>" />
	</ConfirmPage>
	<PasswordMessageForm>
	  <lblMessage Text="Por favor, digite primeiro a senha de backup do iTunes. Ignorar este processo pode fazer com que falhe ao &quot; encontrar suas senhas&quot; .  " />
	  <btnOK Text="OK" />
	  <lblWarning Text="A senha está incorreta. Por favor, tente novamente." />
	  <lnkClear Text="Dicas: Esqueceu a senha do iTunes backup, por favor &lt;a&gt;clique aqui&lt;/a&gt; para removê-la." />
	</PasswordMessageForm>
	<TrustPage>
	    <lblInfo Text="Por favor, digite a senha para desbloquear seu dispositivo e continuar." />
		<lblTips Text="Você não consegue encontrar a solicitação para a senha da tela de bloqueio?" />
		<btnRetry Text="Mostrar Novamente" />
	</TrustPage>
	<UnlcokDeviceForm>
	   <lblTitle Text="Por favor, digite a senha para desbloquear seu dispositivo e continuar." />
	</UnlcokDeviceForm>
	<ScanPage>
	  <lblTitle Text="Digitalizando...Por favor, mantenha seu celular conectado." />

	  <lnkNavigatorOthers Text="Você pode fazer outra coisa ou aprender mais sobre as &lt;a&gt;outras ferramentas do Dr. Fone&lt;/a&gt;." />
	</ScanPage>

	<RecoverPage>
	  <cbxSelectAll Text="Selecione Todos" />
	  <btnBack Text="Voltar" />
	  <btnRecover Text="Exportar" />
	</RecoverPage>
	
	<ScanFailedPage>
	  <lblTitle Text="Desculpe, Erro!" />
	  <lblStep Text="O Gerente de Senha não digitalizou com sucesso. Por favor, verifique a conexão de seu dispositivo e tente novamente." />
	  <btnTry Text="Tentar novamente" />
	</ScanFailedPage>
	
	<TrialForm>
	 <lblTitle Text="Você está usando a versão de avaliação gratuita do Dr.Fone - Password Manager. Adquira uma licença para usufruir de todas as funcionalidades." />
	 <lblHeaderTitle Text="Funcionalidades" />
	 <lblHeaderTrial Text="Versão de Teste" />
	 <lblHeaderRegister Text="Registrado" />
	 <lblTitle1 Text="Digitaliza Dispositivo" />
	 <lblDesc1 Text="Encontra várias senhas e dados no dispositivo" />
	 <lblTitle2 Text="Visualizar e copia 5 tipos de informações de conta" />
	 <lblDesc2 Text="Pré-visualiza informações de acesso WiFi/iOS Chave-de-Acesso/Email " />
	 <lblTrialTips Text="Apenas primeiras senhas com 2 dígitos " />
	 <lblTitle3 Text="Exporta 6 formatos CSV" />
	 <lblDesc3 Text="Exporta formato CSV para 1Password/Chrome/Dashlane/Lastpass/Keeper" />
	 <lblTitle4 Text="Salva todos os registros de digitalização" />
	 <lblDesc4 Text="Criptografa e salva os registros detectados no computador" />
	 <btnBuy Text="Ver preços" />
	</TrialForm>
	
	<ExportToPCForm>
	 <lblTitle Text="Favor Selecionar o Formato CSV para Exportar" />
	 <btn1password Text="Arquivos .csv para 1Password" />
	 <btnChrome Text="Arquivos .csv para Chrome" />
	 <btnDashlane Text="Arquivos .csv para Dashlane" />
	 <btnLastpass Text="Arquivos .csv para LasPass" />
	 <btnKeeper Text="Arquivos .csv para Keeper" />
	 <btnWondershareBackup Text="Arquivos .csv para Dr.Fone - Backup" />
	</ExportToPCForm>
	
	<BackupsPage>
	  <lblTitle Text="Ver os Registros de Digitalização Anteriores" />
	  <lblNoBackups Text="No momento, não há nenhum registro de digitalização. Você quer recuperar suas senhas em seu dispositivo iOS com um clique? &lt;a&gt;Clique em Dr.Fone - Password Manager&lt;/a&gt; para começar." />
	</BackupsPage>
	<!-- start WSid-->
	<LoginControl>
	 <lblEmail Text="Faça login no seu ID da Wondershare" />
	 <edtEmail PlaceHolderText="E-mail" />
	 <btnNext Text="A seguir" />
	 <lnkCreateUser Text="Não tem um ID da Wondershare? &lt;a&gt;Crie sua conta&lt;/a&gt;." />
	 <lblNote Text="Nota: o Dr.Fone agora oferece suporte para login com ID da Wondershare. Você também pode fazer login com seu e-mail licenciado diretamente." />
	 <lblThirdLogin Text="Ou continue com" />
	</LoginControl>
	<PasswordControl>
	  <lblPassword Text="Coloque sua senha" />
	  <edtPassword PlaceHolderText="Senha / código de ativação" />
	  <lnkLogin Text="Faça login em uma conta diferente" />
	  <lnkforgetPassword Text="Esqueceu sua senha?" />
	  <btnNext Text="A seguir"/>
	</PasswordControl>
	<WAFAccountLoginSuccessControl>
	  <lblSuccess Text="Login com sucesso" />
	  <lblStep Text="Nota: o Dr.Fone agora oferece suporte para login com ID da Wondershare. Você também pode fazer login com seu e-mail licenciado diretamente." />
	  <lnkChangePassword Text="Você não tem uma senha ou esqueceu a senha? &lt;a&gt;Clique aqui para redefinir a senha&lt;/a&gt;" />
	</WAFAccountLoginSuccessControl>
	<CreateAccountControl>
	  <lblCreateAccount Text="Cadastre seu ID da Wondershare" />
	  <edtEmail PlaceHolderText="E-mail" />
	  <edtPassword PlaceHolderText="Senha" />
	  <edtFirstName PlaceHolderText="Nome" />
	  <edtLastName PlaceHolderText="Apelido" />
	  <lblEmailError Text="Insira seu endereço de email correto, por favor ." />
	  <lblPasswordError Text="Insira sua senha, por favor." />
	  <btnCreateAccount Text="Criar Conta" />
	  <lnkLogin Text="Voltar para fazer login" />
	  <lnkPrivacy Text="Ao clicar em Criar Conta, concordo que li e aceito os &lt;a&gt;Termos de Uso&lt;/a&gt; e a &lt;a&gt;Política de Privacidade&lt;/a&gt;." />
	</CreateAccountControl>
	<ThirdLoginControl>
	  <lblTitle Text="Carregando…"/>
	  <lblStep Text="Faça login usando a página que acabou de abrir no seu navegador.&#xD;&#xA;&#xD;&#xA;Conclua o processo de autenticação em seu navegador."/>
	  <lnkRestart Text="Reinicie"/>
	</ThirdLoginControl>
	<AuthorLoadingForm>
	   <lblStep Text="Verificando …" />
	</AuthorLoadingForm>
	<!--WSid end-->
	 <FeedBackForm Text="Comentários">
      <lbContentTitle Text="Muito obrigado por entrar em contato!" />
      <lbContentTip Text="Deixe seus comentários sobre o programa ou contate &#xD;&#xA;nosso suporte técnico." />
      <lbEmail Text="Email:" />
      <txtEmail PlaceHolderText="Digite o seu endereço de email" />
	  <lbEmailTip Text="Email inválido" />
	  <lblProblemtype Text="Tipo de problema:" />
      <cmbProblemtype PlaceHolderText="Selecione o tipo de problema" />
      <lblProblemtypeTips Text="Por favor, selecione um tipo de problema" />
      <lblDeviceModel Text="Modelo do dispositivo:" />
      <edtModel PlaceHolderText="Digite o modelo do seu dispositivo" />
      <lbContent Text="Descreva o seu problema em detalhes:" />
      <txtContent PlaceHolderText="Quanto mais detalhado o problema for descrito, melhor será para nós resolver o seu problema." />
      <lbContentEmptyTip Text="Digite os detalhes do problema" />
	  <chkLogSend Text="Anexe o arquivo de log" />
      <btnSend Text="Enviar" />
      <chkDbSend Text="Anexe o arquivo do banco de dados" />
    </FeedBackForm>
	<PiracyTipForm>
	   <lblSecurityReminderTitle Text="Você corre o risco de usar software pirateado!" />
	   <lblSecurityReminderDEs Text="Aviso:Seu computador pode ser infetado por vírus e até ter a perda de dados novamente devido ao uso de software pirateado." />
	   <lblDiscountTitle Text="Aqui está a oferta limitada do temporizador. Você pode usar o código do cupom quando adquirido: &lt;a&gt;LENDFGEN&lt;/a&gt;" />
	   <lblDiscountDes Text="&lt;a&gt;40% de desconto para você comprar a Licença Genuína.&lt;/a&gt;" />
	    <lblDownloadTips Text="Nota: Faça o download e instale uma nova versão no site oficial." />
	   <btnBuy Text="Comprar" />
	   <btnDownload Text="Baixar" />
	</PiracyTipForm>
	<ClosedFindmyGuideForm> 
      <lblTitle Text = "Siga estas etapas para desativar &quot;Buscar iPhone&quot;"/>
      <lblGuideOne Text = "1. Vá para &quot;Configurações > [Your Name] > Buscar iPhone&quot;."/>
      <lblGuideTwo Text = "2. Selecione &quot;Buscar iPhone&quot; e desligue-o."/>
      <lblGuideThree Text = "3. Insira a senha de seu ID Apple e toque em &quot;Desligar&quot;."/>
      <btnSureClosed Text = "Sim, desligado"/>
      <lblFindmyTryTips Text = "&quot;Buscar iPhone&quot; ainda está habilitado em seu dispositivo. Desligue e tente novamente. "/>
    </ClosedFindmyGuideForm> 
	<RebootLockScreenForm>
		<lblTitle Text="Por favor, digite a senha para desbloquear seu dispositivo e continuar." />
	</RebootLockScreenForm>
	<AuthDeviceForm>
 		<lblTitle Text="Você tem que &quot;confiar&quot; no PC para realizar o escaneamento de seus dados. Por favor, siga as instruções abaixo." />
	</AuthDeviceForm>	
  </Forms>
</LanguageResource>                                                                                                                                                                                                                                                                                                                                                                                                                                       {"code":0,"msg":"success.","data":{"product_id":10905,"product_name":"Dr.Fone - Gestionnaire de mots de passe (iOS)","license_id":2829,"sku_id":"100109052829","license_name_language":{"en_us":"Perpetual License (1-5 Devices) ","zh_cn":"Perpetual License(1-5 Devices) ","pt_br":"Perpetual License(1-5 Devices) ","ja_jp":"Perpetual License(1-5 Devices) ","ko_kr":"Perpetual License(1-5 Devices) ","he_he":"Perpetual License(1-5 Devices) ","ar_dz":"Perpetual License(1-5 Devices) ","es_es":"Perpetual License(1-5 Devices) ","pl_pl":"Perpetual License(1-5 Devices) ","de_de":"Perpetual License(1-5 Devices) ","fr_fr":"Licence perp\u00e9tuelle (1-5 appareils)","it_it":"Perpetual License(1-5 Devices) ","es_mx":"Perpetual License(1-5 Devices) ","zh_hk":"Perpetual License(1-5 Devices) ","zh_tw":"Perpetual License(1-5 Devices) ","nl_nl":"Perpetual License(1-5 Devices) ","ru_ru":"Perpetual License(1-5 Devices) ","fi_fi":"Perpetual License(1-5 Devices) ","sv_sv":"Perpetual License(1-5 Devices) ","th_th":"Perpetual License(1-5 Devices) ","no_no":"Perpetual License(1-5 Devices) ","da_da":"Perpetual License(1-5 Devices) ","ms_my":"Perpetual License(1-5 Devices) ","ro_ro":"Perpetual License(1-5 Devices) ","id_id":"Perpetual License(1-5 Devices) ","ar_ae":"Perpetual License(1-5 Devices) ","hi_in":"Perpetual License(1-5 Devices) ","mr_in":"Perpetual License(1-5 Devices) ","bn_in":"Perpetual License(1-5 Devices) ","te_in":"Perpetual License(1-5 Devices) ","ta_in":"Perpetual License(1-5 Devices) ","pj_in":"Perpetual License(1-5 Devices) ","kn_in":"Perpetual License(1-5 Devices) "},"price_list":[{"currency_id":1,"currency_name":"USD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":3,"currency_name":"EUR","currency_price":39.99,"init_price":0,"final_price":39.99,"total_discount":0,"avangate_url":"","cart_url_language":{"de_de":"https:\/\/store.wondershare.com\/index.php?submod=checkout&method=index&pid=10905&license_id=2829&sub_lid=0&coupon_id=12041&currency=EUR&domain=fr&language=German&verify=7060fdcb5955ad616773d6ad258c9281","fr_fr":"https:\/\/store.wondershare.com\/index.php?submod=checkout&method=index&pid=10905&license_id=2829&sub_lid=0&coupon_id=12041&currency=EUR&domain=fr&language=French&verify=7060fdcb5955ad616773d6ad258c9281","es_es":"https:\/\/store.wondershare.com\/index.php?submod=checkout&method=index&pid=10905&license_id=2829&sub_lid=0&coupon_id=12041&currency=EUR&domain=fr&language=Spanish&verify=7060fdcb5955ad616773d6ad258c9281","pt_br":"https:\/\/store.wondershare.com\/index.php?submod=checkout&method=index&pid=10905&license_id=2829&sub_lid=0&coupon_id=12041&currency=EUR&domain=fr&language=Portuguese&verify=7060fdcb5955ad616773d6ad258c9281","it_it":"https:\/\/store.wondershare.com\/index.php?submod=checkout&method=index&pid=10905&license_id=2829&sub_lid=0&coupon_id=12041&currency=EUR&domain=fr&language=Italian&verify=7060fdcb5955ad616773d6ad258c9281","nl_nl":"https:\/\/store.wondershare.com\/index.php?submod=checkout&method=index&pid=10905&license_id=2829&sub_lid=0&coupon_id=12041&currency=EUR&domain=fr&language=Dutch&verify=7060fdcb5955ad616773d6ad258c9281"},"price_country_arr":[]},{"currency_id":4,"currency_name":"JPY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":5,"currency_name":"HKD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":6,"currency_name":"GBP","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":7,"currency_name":"AUD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":11,"currency_name":"CAD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":8,"currency_name":"TWD","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":9,"currency_name":"MXN","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":17,"currency_name":"BRL","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":18,"currency_name":"RUB","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":2,"currency_name":"CNY","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":20,"currency_name":"KRW","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":22,"currency_name":"IDR","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":15,"currency_name":"SEK","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]},{"currency_id":28,"currency_name":"INR","currency_price":0,"init_price":0,"final_price":0,"total_discount":0,"avangate_url":"","cart_url_language":"","price_country_arr":[]}]}}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       �      FL        �      F�@�     7�i������'(��� ��;I�����	                   .: IGYr?�D��U��k0�&  & �   �'>,���79a���?z2��� � t  CFSF 1     dUè AppData   tY^���H�g3��(����ߟgVA�G��k��@ 	  �cUk��XOS.   {�                  �:� A p p D a t a   B P 1     �X�P Local < 	  �cUk��X�P.   ��                  \�1 L o c a l    Z 1     �T�� Programs  B 	  �-R��XP.   K�    )               �O� P r o g r a m s    l 1     �X F MICROS~1  T 	  �nS�m�X!P.   ��                  �� M i c r o s o f t   V S   C o d e    Z 2 ���	�X��  Code.exe  B 	  ��X�p�X-R.   �    �                   C o d e . e x e      r            1       q         u{�   Acer C:\Users\ADAM\AppData\Local\Programs\Microsoft VS Code\Code.exe   O p e n s   a   n e w   w i n d o w  - n ? C : \ U s e r s \ A D A M \ A p p D a t a \ L o c a l \ P r o g r a m s \ M i c r o s o f t   V S   C o d e \ C o d e . e x e     �%USERPROFILE%\AppData\Local\Programs\Microsoft VS Code\Code.exe                                                                                                                                                                                                     % U S E R P R O F I L E % \ A p p D a t a \ L o c a l \ P r o g r a m s \ M i c r o s o f t   V S   C o d e \ C o d e . e x e                                                                                                                                                                                                                                                                                                                                                                                                           `     �X       laptop-1cihl2qa �w�߬6K�ha)T��%��Ie%@���wc�o�w�߬6K�ha)T��%��Ie%@���wc�o�   	  �E   1SPS�����Oh�� +'��)             N e w   W i n d o w         9   1SPS�mD��pH�H@.�=x�   h    H   *�75b�$J�S��U�            ����     R e c e n t   F o l d e r s         �      FL        �      F� �     7�i������'(��� ��;I�����	                   .: IGYr?�D��U��k0�&  & �   �'>,���79a���?z2��� � t  CFSF 1     dUè AppData   tY^���H�g3��(����ߟgVA�G��k��@ 	  �cUk��XOS.   {�                  �:� A p p D a t a   B P 1     �X�P Local < 	  �cUk��X�P.   ��                  \�1 L o c a l    Z 1     �T�� Programs  B 	  �-R��XP.   K�    )               �O� P r o g r a m s    l 1     �X F MICROS~1  T 	  �nS�m�X!P.   ��                  �� M i c r o s o f t   V S   C o d e    Z 2 ���	�X��  Code.exe  B 	  ��X�p�X-R.   �    �                   C o d e . e x e      r            1       q         u{�   Acer C:\Users\ADAM\AppData\Local\Programs\Microsoft VS Code\Code.exe  8 C : \ x a m p p \ h t d o c s \ E M S I \ 3 r d   I n t e r n s h i p \ T a s k   M a n a g e r \ B a c k e n d U - - f o l d e r - u r i   " f i l e : / / / c % 3 A / x a m p p / h t d o c s / E M S I / 3 r d % 2 0 I n t e r n s h i p / T a s k % 2 0 M a n a g e r / B a c k e n d "  e x p l o r e r . e x e `     �X       laptop-1cihl2qa �w�߬6K�ha)T��%��Ie%@���wc�o�w�߬6K�ha)T��%��Ie%@���wc�o�   	  �=   1SPS�����Oh�� +'��!             B a c k e n d       9   1SPS�mD��pH�H@.�=x�   h    H   *�75b�$J�S��U�                 �      FL        �      F� �     7�i������'(��� ��;I�����	                   .: IGYr?�D��U��k0�&  & �   �'>,���79a���?z2��� � t  CFSF 1     dUè AppData   tY^���H�g3��(����ߟgVA�G��k��@ 	  �cUk��XOS.   {�                  �:� A p p D a t a   B P 1     �X�P Local < 	  �cUk��X�P.   ��                  \�1 L o c a l    Z 1     �T�� Programs  B 	  �-R��XP.   K�    )               �O� P r o g r a m s    l 1     �X F MICROS~1  T 	  �nS�m�X!P.   ��                  �� M i c r o s o f t   V S   C o d e    Z 2 ���	�X��  Code.exe  B 	  ��X�p�X-R.   �    �                   C o d e . e x e      r            1       q         u{�   Acer C:\Users\ADAM\AppData\Local\Programs\Microsoft VS Code\Code.exe  $ C : \ x a m p p \ h t d o c s \ I S T A \ D E V 2 0 1 \ P F E \ C o d e = - - f o l d e r - u r i   " f i l e : / / / c % 3 A / x a m p p / h t d o c s / I S T A / D E V 2 0 1 / P F E / C o d e "  e x p l o r e r . e x e `     �X       laptop-1cihl2qa �w�߬6K�ha)T��%��Ie%@���wc�o�w�߬6K�ha)T��%��Ie%@���wc�o~   	  �9   1SPS�����Oh�� +'��             C o d e         9   1SPS�mD��pH�H@.�=x�   h    H   *�75b�$J�S��U�                 �      FL        �      F� �     7�i������'(��� ��;I�����	                   .: IGYr?�D��U��k0�&  & �   �'>,���79a���?z2��� � t  CFSF 1     dUè AppData   tY^���H�g3��(����ߟgVA�G��k��@ 	  �cUk��XOS.   {�                  �:� A p p D a t a   B P 1     �X�P Local < 	  �cUk��X�P.   ��                  \�1 L o c a l    Z 1     �T�� Programs  B 	  �-R��XP.   K�    )               �O� P r o g r a m s    l 1     �X F MICROS~1  T 	  �nS�m�X!P.   ��                  �� M i c r o s o f t   V S   C o d e    Z 2 ���	�X��  Code.exe  B 	  ��X�p�X-R.   �    �                   C o d e . e x e      r            1       q         u{�   Acer C:\Users\ADAM\AppData\Local\Programs\Microsoft VS Code\Code.exe  9 C : \ x a m p p \ h t d o c s \ E M S I \ 3 r d   I n t e r n s h i p \ T a s k   M a n a g e r \ F r o n t e n d V - - f o l d e r - u r i   " f i l e : / / / c % 3 A / x a m p p / h t d o c s / E M S I / 3 r d % 2 0 I n t e r n s h i p / T a s k % 2 0 M a n a g e r / F r o n t e n d "  e x p l o r e r . e x e `     �X       laptop-1cihl2qa �w�߬6K�ha)T��%��Ie%@���wc�o�w�߬6K�ha)T��%��Ie%@���wc�o�   	  �A   1SPS�����Oh�� +'��%          	   F r o n t e n d         9   1SPS�mD��pH�H@.�=x�   h    H   *�75b�$J�S��U�                 �      FL        �      F� �     7�i������'(��� ��;I�����	                   .: IGYr?�D��U��k0�&  & �   �'>,���79a���?z2��� � t  CFSF 1     dUè AppData   tY^���H�g3��(����ߟgVA�G��k��@ 	  �cUk��XOS.   {�                  �:� A p p D a t a   B P 1     �X�P Local < 	  �cUk��X�P.   ��                  \�1 L o c a l    Z 1     �T�� Programs  B 	  �-R��XP.   K�    )               �O� P r o g r a m s    l 1     �X F MICROS~1  T 	  �nS�m�X!P.   ��                  �� M i c r o s o f t   V S   C o d e    Z 2 ���	�X��  Code.exe  B 	  ��X�p�X-R.   �    �                   C o d e . e x e      r            1       q         u{�   Acer C:\Users\ADAM\AppData\Local\Programs\Microsoft VS Code\Code.exe  0 C : \ x a m p p \ h t d o c s \ E M S I \ 3 r d   I n t e r n s h i p \ e r p - t e m p l a t e K - - f o l d e r - u r i   " f i l e : / / / c % 3 A / x a m p p / h t d o c s / E M S I / 3 r d % 2 0 I n t e r n s h i p / e r p - t e m p l a t e "  e x p l o r e r . e x e `     �X       laptop-1cihl2qa �w�߬6K�ha)T��%��Ie%@���wc�o�w�߬6K�ha)T��%��Ie%@���wc�o�   	  �I   1SPS�����Oh�� +'��-             e r p - t e m p l a t e         9   1SPS�mD��pH�H@.�=x�   h    H   *�75b�$J�S��U�                 �      FL        �      F� �     7�i������'(��� ��;I�����	                   .: IGYr?�D��U��k0�&  & �   �'>,���79a���?z2��� � t  CFSF 1     dUè AppData   tY^���H�g3��(����ߟgVA�G��k��@ 	  �cUk��XOS.   {�                  �:� A p p D a t a   B P 1     �X�P Local < 	  �cUk��X�P.   ��                  \�1 L o c a l    Z 1     �T�� Programs  B 	  �-R��XP.   K�    )               �O� P r o g r a m s    l 1     �X F MICROS~1  T 	  �nS�m�X!P.   ��                  �� M i c r o s o f t   V S   C o d e    Z 2 ���	�X��  Code.exe  B 	  ��X�p�X-R.   �    �                   C o d e . e x e      r            1       q         u{�   Acer C:\Users\ADAM\AppData\Local\Programs\Microsoft VS Code\Code.exe  + C : \ x a m p p \ h t d o c s \ E M S I \ 3 r d   I n t e r n s h i p \ B a c k e n d F - - f o l d e r - u r i   " f i l e : / / / c % 3 A / x a m p p / h t d o c s / E M S I / 3 r d % 2 0 I n t e r n s h i p / B a c k e n d "  e x p l o r e r . e x e `     �X       laptop-1cihl2qa �w�߬6K�ha)T��%��Ie%@���wc�o�w�߬6K�ha)T��%��Ie%@���wc�o�   	  �=   1SPS�����Oh�� +'��!             B a c k e n d       9   1SPS�mD��pH�H@.�=x�   h    H   *�75b�$J�S��U�                 �      FL        �      F� �     7�i������'(��� ��;I�����	                   .: IGYr?�D��U��k0�&  & �   �'>,���79a���?z2��� � t  CFSF 1     dUè AppData   tY^���H�g3��(����ߟgVA�G��k��@ 	  �cUk��XOS.   {�                  �:� A p p D a t a   B P 1     �X�P Local < 	  �cUk��X�P.   ��                  \�1 L o c a l    Z 1     �T�� Programs  B 	  �-R��XP.   K�    )               �O� P r o g r a m s    l 1     �X F MICROS~1  T 	  �nS�m�X!P.   ��                  �� M i c r o s o f t   V S   C o d e    Z 2 ���	�X��  Code.exe  B 	  ��X�p�X-R.   �    �                   C o d e . e x e      r            1       q         u{�   Acer C:\Users\ADAM\AppData\Local\Programs\Microsoft VS Code\Code.exe  , C : \ x a m p p \ h t d o c s \ E M S I \ 3 r d   I n t e r n s h i p \ F r o n t e n d G - - f o l d e r - u r i   " f i l e : / / / c % 3 A / x a m p p / h t d o c s / E M S I / 3 r d % 2 0 I n t e r n s h i p / F r o n t e n d "  e x p l o r e r . e x e `     �X       laptop-1cihl2qa �w�߬6K�ha)T��%��Ie%@���wc�o�w�߬6K�ha)T��%��Ie%@���wc�o�   	  �A   1SPS�����Oh�� +'��%          	   F r o n t e n d         9   1SPS�mD��pH�H@.�=x�   h    H   *�75b�$J�S��U�                 �      FL        �      F� �     7�i������'(��� ��;I�����	                   .: IGYr?�D��U��k0�&  & �   �'>,���79a���?z2��� � t  CFSF 1     dUè AppData   tY^���H�g3��(����ߟgVA�G��k��@ 	  �cUk��XOS.   {�                  �:� A p p D a t a   B P 1     �X�P Local < 	  �cUk��X�P.   ��                  \�1 L o c a l    Z 1     �T�� Programs  B 	  �-R��XP.   K�    )               �O� P r o g r a m s    l 1     �X F MICROS~1  T 	  �nS�m�X!P.   ��                  �� M i c r o s o f t   V S   C o d e    Z 2 ���	�X��  Code.exe  B 	  ��X�p�X-R.   �    �                   C o d e . e x e      r            1       q         u{�   Acer C:\Users\ADAM\AppData\Local\Programs\Microsoft VS Code\Code.exe  * C : \ x a m p p \ h t d o c s \ E M S I \ 3 r d   I n t e r n s h i p \ t e m p o r E - - f o l d e r - u r i   " f i l e : / / / c % 3 A / x a m p p / h t d o c s / E M S I / 3 r d % 2 0 I n t e r n s h i p / t e m p o r "  e x p l o r e r . e x e `     �X       laptop-1cihl2qa �w�߬6K�ha)T��%��Ie%@���wc�o�w�߬6K�ha)T��%��Ie%@���wc�o�   	  �=   1SPS�����Oh�� +'��!             t e m p o r         9   1SPS�mD��pH�H@.�=x�   h    H   *�75b�$J�S��U�            ����      ����                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       