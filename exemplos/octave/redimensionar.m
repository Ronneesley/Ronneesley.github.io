#Leitura da folha
I = imread("imagens/folha.jpg");

#Redimensionar a imagem
IR = imresize(I, [100 100])

#Armazena a imagem em escala de cinza
imwrite(IR, "imagens/folha_redimensionada.jpg");

#Mostra a imagem
imshow(IR)