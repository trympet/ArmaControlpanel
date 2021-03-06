<?xml version="1.0" encoding="UTF-8" standalone="no" ?>
<Service>
 <Program>
  <Name>{{ $server->name }}</Name>
  <DisplayName>{{ $server->hostname_escaped }}</DisplayName>
  <DisplayNamePrefix>ArmA 3 - </DisplayNamePrefix>
  <WorkingDir>{{ $ServerController->arma3path }}</WorkingDir>
  <Executable>{{ $ServerController->arma3exe }}</Executable>
  <Parameters>-server -name=arma3 "-profiles={{ $ServerController->arma3path }}\instances\{{ $server->name }}\profile" "-pid={{ $ServerController->arma3path }}\instances\{{ $server->name }}\server.pid" "-config={{ $ServerController->arma3path }}\instances\{{ $server->name }}\server.cfg" "-cfg={{ $ServerController->arma3path }}\instances\{{ $server->name }}\basic.cfg" "-par={{ $ServerController->arma3path }}\instances\{{ $server->name }}\parameters.cfg" "-ranking={{ $ServerController->arma3path }}\instances\{{ $server->name }}\logs\ranking.log" "-bepath={{ $ServerController->arma3path }}\instances\{{ $server->name }}\battleye" -port={{ $server->port }}2</Parameters>
  <Delay>3000</Delay>
  <StartUpMode>0</StartUpMode>
  <ForceReplace>true</ForceReplace>
 </Program>
 <Options>
  <AffinityMask>0</AffinityMask>
  <Priority>3</Priority>
  <AppendLogs>true</AppendLogs>
  <EventLogging>true</EventLogging>
  <InteractWithDesktop>true</InteractWithDesktop>
  <PreLaunchDelay>0</PreLaunchDelay>
  <ConsoleApp>false</ConsoleApp>
  <CtrlC>0</CtrlC>
  <UponExit>1</UponExit>
  <UponFlap>0</UponFlap>
  <FlapCount>0</FlapCount>
  <UponFail>0</UponFail>
  <FailCount>0</FailCount>
  <ShutdownDelay>5000</ShutdownDelay>
  <ShowWindow>0</ShowWindow>
  <JobType>0</JobType>
  <IgnoreFlags>3</IgnoreFlags>
 </Options>
 <SMF>
  <SMFEnabled>true</SMFEnabled>
  <SMFFrequency>5000</SMFFrequency>
 </SMF>
 <Scheduling>
  <StartTime>00:00:00</StartTime>
  <EndTime>00:00:00</EndTime>
  <RunDays>127</RunDays>
  <MonthFrom>0</MonthFrom>
  <MonthTo>0</MonthTo>
  <MonthDay>0</MonthDay>
  <RestartFreq>0</RestartFreq>
  <RestartEvery>60</RestartEvery>
  <RestartDelay>0</RestartDelay>
  <RestartTime>00:00:00</RestartTime>
 </Scheduling>
 <DlgResponder>
  <Enabled>false</Enabled>
  <CloseAll>false</CloseAll>
  <CheckFrequency>5000</CheckFrequency>
  <IgnoreUnknowns>true</IgnoreUnknowns>
  <LogFile></LogFile>
  <Responses>
  </Responses>
 </DlgResponder>
 <Recovery>
  <FirstFailure>1</FirstFailure>
  <SecondFailure>1</SecondFailure>
  <SubSequent>0</SubSequent>
  <ResetFailCountAfter>0</ResetFailCountAfter>
  <RestartServiceDelay>0</RestartServiceDelay>
  <RestartComputerDelay>0</RestartComputerDelay>
  <Program></Program>
  <CommandLineParams></CommandLineParams>
  <AppendFailCount>false</AppendFailCount>
  <EnableActionsForStopWithErrors>false</EnableActionsForStopWithErrors>
  <SendMsg>false</SendMsg>
  <RebootMsg></RebootMsg>
 </Recovery>
</Service>
