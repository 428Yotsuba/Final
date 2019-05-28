#!/bin/bash

/bin/cp -f /System/Library/Extensions/AMD10000Controller.kext/Contents/Info.plist /tmp/VGtmp.plist
echo $1|base64 -D > /tmp/VGtmp.txt
dev=$(cat /tmp/VGtmp.txt|grep Dev|awk -F '=' '{print $2}')
if [ x$dev = x64 ];then
org="b6020801005c00e1060000ee2b00001b004800000080a90300f0490200power0008000000000000000000000000000002015c004f02460294009e01be0028017a008c00bc0100000000720200009000a8026d0143019701f049020071020202000000000000080000000000000005000700030005000000000000000108P0cvP1cvP2cvP3cvP4cvP5cvP6cvP7cv0101P3mv01018403000860ea00000040190100018038010002dc4a010003905f010004007701000590910100066cb00100070108P0cf00000080000000000000P1cf00010000000000000000P2cf00020000000000000000P3cf00030000000000000000P4cf00040000000000000000P5cf00050000000001000000P6cf00060000000001000000P7cf00070000000001000000000560ea00000040190100008038010000dc4a010000905f0100000008286e0000002cc9000001f80b0100028038010003905f010004f491010005d0b0010006c0d401000700086c39000000245e000001fc85000002acbc00000334d0000004686e0100050897010006eca30100070001683c0100000104P0mf00000000P1mf00000000P2mf00020000P3mf000400000108009885000040b5000060ea000050c300000180bb000060ea0000940b010050c300000200e10000940b01004019010050c300000378ff0000401901008826010050c300000440190100803801008038010050c300000580380100dc4a0100dc4a010050c30000060077010000770100905f010050c300000790910100909101000077010050c300000118000000000000000bsenFanfreeFandownFantempLine0a0054039001900190019001900190019001000000000002minFanmaxFan07dc00dc00dc002c010000590069004a004a005f007300730064004000909297609600905500000000000000000000000000000000000202d4300000021060ea00000210"
elif [ x$dev = x56 ];then
org="a7020801005c00ef0600000e2c00001b004800000080a90300f0490200power0008000000000000000000000000000002015c004002370294008f01b4001e017a008c00ad010000000063020000900099025e01340188016836020071020202000000000000080000000000000005000700030005000000000000000108P0cvP1cvP2cvP3cvP4cvP5cvP6cvP7cv0101P3mv01018403000660ea0000004019010001dc4a010002007701000390910100056cb00100070108P0cf00000080000000000000P1cf00010000000000000000P2cf00020000000000000000P3cf00030000000000000000P4cf00040000000000000000P5cf00050000000001000000P6cf00060000000001000000P7cf00070000000001000000000460ea0000004019010000dc4a010000905f0100000008286e0000002cc9000001f80b0100028038010003905f010004f491010005d0b0010006c0d401000700086c39000000245e000001fc85000002acbc00000334d0000004686e0100050897010006eca30100070001683c0100000104P0mf00000000P1mf00000000P2mf00010000P3mf000200000108009885000040b5000060ea000050c300000180bb000060ea0000940b010050c300000278ff000040190100b427010050c3000003b4270100dc4a0100dc4a010050c300000480380100905f0100dc4a010050c3000005dc4a010000770100905f010050c30000060077010000770100905f010050c300000700770100909101000077010050c300000118000000000000000bsenFanfreeFandownFantempLine0a0054039001900190019001900190019001000000000002minFanmaxFan07a500a500a5002c010000590069004a004a005f007300730064004000909297609600905500000000000000000000000000000000000202d4300000021060ea00000210"
elif [ x$dev = xFE ];then
org="82020801005c0022070000032b00001b004800000080a90300f0490200power0008000000000000000000000000000002015c001b02120294006a01b400fe007a008c008801000000003e0200009000740239010f0163010071020071020202000000000000080000000000000005000700030005000000000000000108P0cvP1cvP2cvP3cvP4cvP5cvP6cvP7cv0101P3mv01018403000660ea0000004019010001dc4a010002007701000390910100046cb00100050008P0cf000000800000P1cf000100000000P2cf000200000000P3cf000300000000P4cf000400000000P5cf000500000000P6cf000600000000P7cf000700000000000360ea000000401901000080380100000008286e0000002cc9000001f80b0100028038010003905f010004f491010005d0b0010006c0d401000700086c39000000245e000001fc85000002acbc00000334d0000004686e0100050897010006eca30100070001683c0100000104P0mf00000000P1mf00010000P2mf00020000P3mf000300000108009885000078b4000060ea000050c300000180bb000060ea0000940b010050c300000278ff000040190100b427010050c3000003b4270100dc4a0100dc4a010050c3000004dc4a0100905f0100905f010050c300000500770100909101000077010050c3000006909101006cb001000077010050c30000076cb001006cb001009091010050c300000118000000000000000bsenFanfreeFandownFantempLine0a0054039001900190019001900190019001000000000002minFanmaxFan07dc00dc00dc002c01000059006900490049005f007300730064004000909297609600905500000000000000000000000000000000000202d4300000021060ea00000210"
elif [ x$dev = x64LC ];then
org="9d020801005c0037070000ec2b00001b004800000080a90300f0490200power0008000000000000000000000000000002015c0036022d0294008501af0019017a008c00a301000000005902000090008f0254012a017e010071020071020202000000000000080000000000000004000700030005000000000000000108P0cvP1cvP2cvP3cvP4cvP5cvP6cvP7cv0101P3mv01018403000560ea000000dc4a010001007701000290910100036cb00100040108P0cf00000080000000000000P1cf00010000000000000000P2cf00020000000000000000P3cf00030000000000000000P4cf00040000000000000000P5cf00050000000001000000P6cf00060000000001000000P7cf00070000000001000000000360ea000000dc4a010000905f0100000008286e0000002cc9000001f80b0100028038010003905f010004f491010005d0b0010006c0d401000700086c39000000245e000001fc85000002acbc00000334d0000004686e0100050897010006eca30100070001683c0100000104P0mf00000000P1mf00000000P2mf00010000P3mf000200000108009885000078b4000060ea000050c300000178ff000040190100b427010050c300000280380100dc4a0100dc4a010050c3000003dc4a0100905f0100905f010050c3000004905f010000770100905f010050c30000050077010090910100905f010050c30000066cb001006cb001000077010050c3000007c0d40100c0d401009091010050c300000118000000000000000bsenFanfreeFandownFantempLine0f0054039001900190019001900190019001000000000002minFanmaxFan070801080108012c0100004a0069004a004a005f007300730064004000909297609600904600000000000000000000000000000000000202d4300000021060ea00000210"
elif [ x$dev = xFELC ];then
org="82020801005c00120700003d2b00001b004800000080a90300f0490200power0008000000000000000000000000000002015c001b02120294006a01b400fe007a008c008801000000003e0200009000740239010f0163010071020071020202000000000000080000000000000005000700030005000000000000000108P0cvP1cvP2cvP3cvP4cvP5cvP6cvP7cv0101P3mv01018403000660ea0000004019010001dc4a010002007701000390910100046cb00100050008P0cf000000800000P1cf000100000000P2cf000200000000P3cf000300000000P4cf000400000000P5cf000500000000P6cf000600000000P7cf000700000000000360ea000000401901000080380100000008286e0000002cc9000001f80b0100028038010003905f010004f491010005d0b0010006c0d401000700086c39000000245e000001fc85000002acbc00000334d0000004686e0100050897010006eca30100070001683c0100000104P0mf00000000P1mf00010000P2mf00020000P3mf000300000108009885000078b4000060ea000050c300000180bb000060ea0000940b010050c300000278ff000040190100b427010050c3000003b4270100dc4a0100dc4a010050c3000004dc4a0100905f0100905f010050c300000500770100909101000077010050c3000006909101006cb001000077010050c30000076cb001006cb001009091010050c300000118000000000000000bsenFanfreeFandownFantempLine0f0054039001900190019001900190019001000000000002minFanmaxFan070801080108012c0100004a0069004a004a005f007300730064004000909297609600904600000000000000000000000000000000000202d4300000021060ea00000210"
else
	exit
fi
for i in $(cat /tmp/VGtmp.txt|grep -E "[cm]v|freeFan|downFan|senFan");do
	key=$(echo $i|awk -F '=' '{print $1}')
	value=$(echo $(printf "%04x\n" $(echo $i|awk -F '=' '{print $2}'))|sed 's/../& /g'|awk '{print $2$1}')
	org=$(echo $org|sed 's/'$key'/'$value'/g')
done
for i in $(cat /tmp/VGtmp.txt|grep -E "[cm]f");do
	key=$(echo $i|awk -F '=' '{print $1}')
	value=$(echo $(printf "%06x\n" $(echo $i|awk -F '=' '{print $2*100}'))|sed 's/../& /g'|awk '{print $3$2$1}')
	org=$(echo $org|sed 's/'$key'/'$value'/g')
done
for i in $(cat /tmp/VGtmp.txt|grep -E "minFan|maxFan");do
	key=$(echo $i|awk -F '=' '{print $1}')
	value=$(echo $(printf "%02x\n" $(echo $i|awk -F '=' '{print int($2/100)}')))
	org=$(echo $org|sed 's/'$key'/'$value'/g')
done
org=$(echo $org|sed "s/tempLine/"$(printf %04x $(cat /tmp/VGtmp.txt|grep tempLine|awk -F '=' '{print $2}')|sed 's/../& /g'|awk '{print $2$1}')"/g")
org=$(echo $org|sed "s/power/"$(printf %x $(cat /tmp/VGtmp.txt|grep power|awk -F '=' '{print $2}'))"/g")
echo $org|xxd -r -p > /tmp/VGtmp.bin
echo $org|tr -d ' '|xxd -r -p|xxd -i -c 8 > ~/Desktop/VegaTab_${dev}_data.txt
/usr/libexec/PlistBuddy -c "Import :IOKitPersonalities:Controller:aty_properties:PP_PhmSoftPowerPlayTable /tmp/VGtmp.bin" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Add :IOKitPersonalities:Controller:aty_properties:PP_DisablePowerContainment integer 1" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Set :CFBundleIdentifier com.lihaoyun6.customVegaTab" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Set :CFBundleName customVegaTab" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Set :CFBundleShortVersionString 0.1" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Set :CFBundleVersion 0.1" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Delete :IOKitPersonalities:AtiGpuWrangler" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Delete :DTCompiler" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Delete :DTPlatformBuild" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Delete :DTPlatformVersion" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Delete :DTSDKBuild" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Delete :DTSDKName" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Delete :DTXcode" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Delete :DTXcodeBuild" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Delete :BuildMachineOSBuild" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Delete :CFBundleExecutable" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Delete :CFBundleGetInfoString" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Delete :CFBundleSupportedPlatforms" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Delete :OSBundleLibraries" /tmp/VGtmp.plist
/usr/libexec/PlistBuddy -c "Delete :OSBundleRequired" /tmp/VGtmp.plist
echo $dev > /tmp/VGtmp.txt
mkdir -p ~/Desktop/VegaTab_${dev}.kext/Contents
/bin/mv -f /tmp/VGtmp.plist ~/Desktop/VegaTab_${dev}.kext/Contents/Info.plist