@echo off
setlocal enabledelayedexpansion
echo 
echo =========================================================================
echo 设置编译环境变量
echo 


for /f "delims=" %%a in (Version_Release.txt) do (
set "insteadVersion=tvportal_%%a_发布"
)

path %windir%\Microsoft.NET\Framework\v4.0.30319

cd ..
path %windir%\system32

md 产品发布\!insteadVersion!\tvportal-Publish\tvportal
xcopy /S /E /I /R /Y /Q app\*.* 产品发布\!insteadVersion!\tvportal-Publish\tvportal\app
xcopy /S /E /I /R /Y /Q ThinkPHP\*.* 产品发布\!insteadVersion!\tvportal-Publish\tvportal\ThinkPHP
xcopy /R /Y /Q .htaccess 产品发布\!insteadVersion!\tvportal-Publish\tvportal
xcopy /R /Y /Q index.php 产品发布\!insteadVersion!\tvportal-Publish\tvportal
copy /Y BUILD\Version_Release.txt 产品发布\!insteadVersion!\tvportal-Publish\tvportal\version.txt


echo 正在压缩文件...
cd 产品发布
set filename=!insteadVersion!.rar
..\BUILD\"WinRAR.exe" a -ibck -m3  !insteadVersion!\%filename%  !insteadVersion!

rd /s /q !insteadVersion!\tvportal-Publish





