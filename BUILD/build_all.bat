@echo off
setlocal enabledelayedexpansion
echo ��
echo =========================================================================
echo ���ñ��뻷������
echo ��


for /f "delims=" %%a in (Version_Release.txt) do (
set "insteadVersion=tvportal_%%a_����"
)

path %windir%\Microsoft.NET\Framework\v4.0.30319

cd ..
path %windir%\system32

md ��Ʒ����\!insteadVersion!\tvportal-Publish\tvportal
xcopy /S /E /I /R /Y /Q app\*.* ��Ʒ����\!insteadVersion!\tvportal-Publish\tvportal\app
xcopy /S /E /I /R /Y /Q ThinkPHP\*.* ��Ʒ����\!insteadVersion!\tvportal-Publish\tvportal\ThinkPHP
xcopy /R /Y /Q .htaccess ��Ʒ����\!insteadVersion!\tvportal-Publish\tvportal
xcopy /R /Y /Q index.php ��Ʒ����\!insteadVersion!\tvportal-Publish\tvportal
copy /Y BUILD\Version_Release.txt ��Ʒ����\!insteadVersion!\tvportal-Publish\tvportal\version.txt


echo ����ѹ���ļ�...
cd ��Ʒ����
set filename=!insteadVersion!.rar
..\BUILD\"WinRAR.exe" a -ibck -m3  !insteadVersion!\%filename%  !insteadVersion!

rd /s /q !insteadVersion!\tvportal-Publish





