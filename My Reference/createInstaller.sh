#!/bin/sh
Clear
echo "Script to create installer..."
echo

echo
echo creating folders
echo

mkdir ~/Desktop/091-94326/
cd ~/Desktop/091-94326/

echo
echo Downloading files...
echo

if [ "`ls 091-94326.English.dist`" != "091-94326.English.dist" ]; then
curl https://swdist.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/091-94326.English.dist -o 091-94326.English.dist
fi;

if [ "`ls RecoveryHDMetaDmg.pkm`" != "RecoveryHDMetaDmg.pkm" ]; then
curl https://swdist.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/RecoveryHDMetaDmg.pkm -o RecoveryHDMetaDmg.pkm
fi;

if [ "`ls RecoveryHDMetaDmg.pkg`" != "RecoveryHDMetaDmg.pkg" ]; then
curl http://swcdn.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/RecoveryHDMetaDmg.pkg -o RecoveryHDMetaDmg.pkg
fi;

if [ "`ls OSInstall.mpkg`" != "OSInstall.mpkg" ]; then
curl http://swcdn.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/OSInstall.mpkg -o OSInstall.mpkg
fi;

if [ "`ls InstallAssistantAuto.pkm`" != "InstallAssistantAuto.pkm" ]; then
curl https://swdist.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/InstallAssistantAuto.pkm -o InstallAssistantAuto.pkm
fi;

if [ "`ls InstallAssistantAuto.pkg`" != "InstallAssistantAuto.pkg" ]; then
curl http://swcdn.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/InstallAssistantAuto.pkg -o InstallAssistantAuto.pkg
fi;

if [ "`ls BaseSystem.dmg`" != "BaseSystem.dmg" ]; then
curl http://swcdn.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/BaseSystem.dmg -o BaseSystem.dmg -o BaseSystem.dmg
fi;


if [ "`ls InstallESDDmg.pkm`" != "InstallESDDmg.pkm" ]; then
curl https://swdist.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/InstallESDDmg.pkm -o InstallESDDmg.pkm -o InstallESDDmg.pkm
fi;

if [ "`ls InstallESDDmg.pkg`" != "InstallESDDmg.pkg" ]; then
curl http://swcdn.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/InstallESDDmg.pkg -o InstallESDDmg.pkg
fi;

if [ "`ls BaseSystem.chunklist`" != "BaseSystem.chunklist" ]; then
curl http://swcdn.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/BaseSystem.chunklist -o BaseSystem.chunklist -o BaseSystem.chunklist
fi;

if [ "`ls InstallESDDmg.chunklist`" != "InstallESDDmg.chunklist" ]; then
curl http://swcdn.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/InstallESDDmg.chunklist -o InstallESDDmg.chunklist -o InstallESDDmg.chunklist
fi;

if [ "`ls InstallInfo.plist`" != "InstallInfo.plist" ]; then
curl http://swcdn.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/InstallInfo.plist -o InstallInfo.plist
fi;

if [ "`ls AppleDiagnostics.chunklist`" != "AppleDiagnostics.chunklist" ]; then
curl http://swcdn.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/AppleDiagnostics.chunklist -o AppleDiagnostics.chunklist
fi;

if [ "`ls AppleDiagnostics.dmg`" != "AppleDiagnostics.dmg" ]; then
curl http://swcdn.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/AppleDiagnostics.dmg -o AppleDiagnostics.dmg
fi;

if [ "`ls MajorOSInfo.pkm`" != "MajorOSInfo.pkm" ]; then
curl https://swdist.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/MajorOSInfo.pkm -o MajorOSInfo.pkm
fi;

if [ "`ls MajorOSInfo.pkg`" != "MajorOSInfo.pkg" ]; then
curl http://swcdn.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/MajorOSInfo.pkg -o MajorOSInfo.pkg
fi;

if [ "`ls InstallAssistantAuto.smd`" != "InstallAssistantAuto.smd" ]; then
curl http://swcdn.apple.com/content/downloads/29/03/091-94326/45lbgwa82gbgt7zbgeqlaurw2t9zxl8ku7/InstallAssistantAuto.smd -o InstallAssistantAuto.smd
fi;

echo
echo Building package...
echo


cd ..
productbuild --distribution ./091-94326/091-94326.English.dist --package-path ./091-94326/ installer.pkg

sudo /usr/sbin/installer -pkg installer.pkg -target /

echo
echo Copying files
echo

sudo cp ./091-94326/InstallESDDmg.pkg /Applications/Install\ macOS\ High\ Sierra.app/Contents/SharedSupport/InstallESD.dmg
sudo cp ./091-94326/AppleDiagnostics.dmg /Applications/Install\ macOS\ High\ Sierra.app/Contents/SharedSupport/
sudo cp ./091-94326/AppleDiagnostics.chunklist /Applications/Install\ macOS\ High\ Sierra.app/Contents/SharedSupport/
sudo cp ./091-94326/BaseSystem.dmg /Applications/Install\ macOS\ High\ Sierra.app/Contents/SharedSupport/
sudo cp ./091-94326/BaseSystem.chunklist /Applications/Install\ macOS\ High\ Sierra.app/Contents/SharedSupport/

echo
echo Finished...
echo



