pkg load image;

#Leitura da folha
I = imread("folha.jpg");

#Imagem em escala de cinza
IG = rgb2gray(I);

#Binariza a imagem
IBordaSobel = edge(IG, "Sobel");
IBordaLoG = edge(IG, "LoG");

#Armazena a imagem em escala de cinza
imwrite(IBordaSobel, "folha_bordas_sobel.jpg");
imwrite(IBordaLoG, "folha_bordas_log.jpg");

#Mostra a imagem
imshow(IBordaSobel)
#imshow(IBordaLoG)