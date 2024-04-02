pkg load image;

#Leitura da folha
I = imread("imagens/folha.jpg");

#Obtém o número de linhas e colunas da imagem
[n, m, _] = size(I);

#Imagem em escala de cinza
IG = zeros(n, m, "uint8");

for i = 1:n
  for j = 1:m
    R = I(i, j, 1);
    G = I(i, j, 2);
    B = I(i, j, 3);
    IG(i, j) = uint8((uint32(R) + uint32(G) + uint32(B))/3);
  endfor
endfor


#Armazena a imagem em escala de cinza
imwrite(IG, "imagens/folha_escala_cinza_proprio.jpg");

#Mostra a imagem
imshow(IG)
