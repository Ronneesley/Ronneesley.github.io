pkg load image;

#Leitura da folha
I = imread("imagens/folha.jpg");

#Imagem em escala de cinza
IG = rgb2gray(I);

#Converte a imagem para double
IT = im2double(IG);

#Kernel x de Sobel
Gx = [-1 0 1; -2 0 2; -1 0 1];
Gy = [1 2 1; 0 0 0; -1 -2 -1];
k = Gy; #Kernel em uso

#Obtendo o número de linhas e colunas
[n, m] = size(IG);

#Criando uma nova imagem
C = zeros(n, m);

for i = 2:n - 1
  for j = 2:m - 1
    C(i, j) = IT(i - 1, j - 1) * k(1, 1) + ...
              IT(i - 1, j) * k(1, 2) + ...
              IT(i - 1, j + 1) * k(1, 3) + ...
              IT(i, j - 1) * k(2, 1) + ...
              IT(i, j) * k(2, 2) + ...
              IT(i, j + 1) * k(2, 3) + ...
              IT(i + 1, j - 1) * k(3, 1) + ...
              IT(i + 1, j) * k(3, 2) + ...
              IT(i + 1, j + 1) * k(3, 3);
  endfor
endfor

#Armazena a imagem da convolução
imwrite(C, "imagens/folha_convolucao.jpg");

#Exibindo a image
imshow(C)