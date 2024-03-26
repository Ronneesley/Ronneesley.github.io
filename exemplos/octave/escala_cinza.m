#Pacotes a serem instalados
#pkg install "https://downloads.sourceforge.net/project/octave/Octave%20Forge%20Packages/Individual%20Package%20Releases/image-2.14.0.tar.gz"

pkg load image;

#Leitura da folha
I = imread("folha.jpg");

#Imagem em escala de cinza
IG = rgb2gray(I);

#Armazena a imagem em escala de cinza
imwrite(IG, "folha_escala_cinza.jpg");

#Mostra a imagem
imshow(IG)