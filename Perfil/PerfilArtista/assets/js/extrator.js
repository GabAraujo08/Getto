const fileInput = document.getElementById('coverFile');

const updateColor = (color, elementId) => {
  const element = document.getElementById(elementId);
  element.style.backgroundColor = color;
};

const getComplementaryColor = (color) => {
  // converte a cor hexadecimal para HSL
  const hslColor = convertHexToHSL(color);

  // adiciona 180 ao valor do matiz (Hue) para obter a cor complementar
  hslColor.h = (hslColor.h + 180) % 360;

  // converte a cor HSL de volta para hexadecimal
  return convertHSLToHex(hslColor);
};

const buildPalette = (colorsList) => {
  // atualiza as cores dos botões
  const orderedByColor = orderByLuminance(colorsList);
  const hslColors = convertRGBtoHSL(orderedByColor);

  for (let i = 0; i < orderedByColor.length; i++) {
    const hexColor = rgbToHex(orderedByColor[i]);

    if (i > 0) {
      const difference = calculateColorDifference(
        orderedByColor[i],
        orderedByColor[i - 1]
      );

      // se a distancia for menor que 120 a cor será omitida
      if (difference < 120) {
        continue;
      }
    }


    if (i === 3) {
    
      updateColor(hexColor, 'nextBtn');
      updateColor(hexColor, 'option-1');
      updateColor(hexColor, 'step')
  
    }


    if (i === 1) {
      updateColor(hexColor,'modalContent')
      updateColor(hexColor,'legend')
      updateColor(hexColor,'areaForm')
      updateColor(hexColor,'regForm')
      updateColor(hexColor,'wrapper')
      updateColor(hexColor,'opcao-1')
      updateColor(hexColor,'opcao-2')
      updateColor(hexColor,'opcao-3')
      updateColor(hexColor, 'prevBtn');
      updateColor(hexColor, 'step-active');
      updateColor(hexColor, 'PreviewContainer');

    }

  }
};
  
  //converter os pixel(int) em hexadecimal(string)
  const rgbToHex = (pixel) => {
    const componentToHex = (c) => {
      const hex = c.toString(16);
      return hex.length == 1 ? "0" + hex : hex;
    };
  
    return (
      "#" +
      componentToHex(pixel.r) +
      componentToHex(pixel.g) +
      componentToHex(pixel.b)
    ).toUpperCase();
  };
  
  /**
   * Converter HSL para Hex
   *essa formula foi encontrada em stackoverflow, creditos para @icl7126 !!!
   * https://stackoverflow.com/a/44134328/17150245
   */
  const hslToHex = (hslColor) => {
    const hslColorCopy = { ...hslColor };
    hslColorCopy.l /= 100;
    const a =
      (hslColorCopy.s * Math.min(hslColorCopy.l, 1 - hslColorCopy.l)) / 100;
    const f = (n) => {
      const k = (n + hslColorCopy.h / 30) % 12;
      const color = hslColorCopy.l - a * Math.max(Math.min(k - 3, 9 - k, 1), -1);
      return Math.round(255 * color)
        .toString(16)
        .padStart(2, "0");
    };
    return `#${f(0)}${f(8)}${f(4)}`.toUpperCase();
  };
  
  /**
   * Convertendo os valores RGB para HSL
   * essa formula foi encontrada aqui: https://www.niwa.nu/2013/05/math-behind-colorspace-conversions-rgb-hsl/
   */
  const convertRGBtoHSL = (rgbValues) => {
    return rgbValues.map((pixel) => {
      let hue,
        saturation,
        luminance = 0;
  
      // primeiro intervalo de mudança de 0-255 a 0 - 1(tendi nada)
      let redOpposite = pixel.r / 255;
      let greenOpposite = pixel.g / 255;
      let blueOpposite = pixel.b / 255;
  
      const Cmax = Math.max(redOpposite, greenOpposite, blueOpposite);
      const Cmin = Math.min(redOpposite, greenOpposite, blueOpposite);
  
      const difference = Cmax - Cmin;
  
      luminance = (Cmax + Cmin) / 2.0;
  
      if (luminance <= 0.5) {
        saturation = difference / (Cmax + Cmin);
      } else if (luminance >= 0.5) {
        saturation = difference / (2.0 - Cmax - Cmin);
      }
  
      /**
       * Se vermelho é max, então Hue = (G-B)/(max-min)
       * Se Verde é max, então Hue = 2.0 + (B-R)/(max-min)
       * Se Azul é max, então Hue = 4.0 + (R-G)/(max-min)
       */
      const maxColorValue = Math.max(pixel.r, pixel.g, pixel.b);
  
      if (maxColorValue === pixel.r) {
        hue = (greenOpposite - blueOpposite) / difference;
      } else if (maxColorValue === pixel.g) {
        hue = 2.0 + (blueOpposite - redOpposite) / difference;
      } else {
        hue = 4.0 + (greenOpposite - blueOpposite) / difference;
      }
  
      hue = hue * 60; //encontrar o setor de 60 graus ao qual a cor pertence(também não entendi)
  
      // deve ser sempre um ângulo positivo
      if (hue < 0) {
        hue = hue + 360;
      }
  
      // Quando todos os três de R, G e B são iguais, obtemos uma cor neutra: branco, cinza ou preto.
      if (difference === 0) {
        return false;
      }
  
      return {
        h: Math.round(hue) + 180, // plus 180 degrees because that is the complementary color
        s: parseFloat(saturation * 100).toFixed(2),
        l: parseFloat(luminance * 100).toFixed(2),
      };
    });
  };
  
  /**
   * Usando luminância relativa ordenamos o brilho das cores
   * os valores fixos e mais explicações sobre este tópico
   * pode ser encontrado aqui -> https://en.wikipedia.org/wiki/Luma_(vídeo)
   */
  const orderByLuminance = (rgbValues) => {
    const calculateLuminance = (p) => {
      return 0.2126 * p.r + 0.7152 * p.g + 0.0722 * p.b;
    };
  
    return rgbValues.sort((p1, p2) => {
      return calculateLuminance(p2) - calculateLuminance(p1);
    });
  };
  
  const buildRgb = (imageData) => {
    const rgbValues = [];

    for (let i = 0; i < imageData.length; i += 4) {
      const rgb = {
        r: imageData[i],
        g: imageData[i + 1],
        b: imageData[i + 2],
      };
  
      rgbValues.push(rgb);
    }
  
    return rgbValues;
  };
  
  /**
   * Calcular a distância de cor ou diferença entre 2 cores
   *
   * mais explicações sobre este tópico
   * pode ser encontrado aqui -> https://en.wikipedia.org/wiki/Euclidean_distance
   * nota: este método não é accuarate para melhores resultados usando a métrica de distância Delta-E.
   */
  const calculateColorDifference = (color1, color2) => {
    const rDifference = Math.pow(color2.r - color1.r, 2);
    const gDifference = Math.pow(color2.g - color1.g, 2);
    const bDifference = Math.pow(color2.b - color1.b, 2);
  
    return rDifference + gDifference + bDifference;
  };
  
  // retorna qual canal de cor tem a maior diferença
  const findBiggestColorRange = (rgbValues) => {
    /**
     * Min é inicializado para o valor máximo possível
     * a partir daí nós processamos para encontrar o valor mínimo para esse canal de cor
     *
     * Max é inicializado para o valor mínimo possível
     * a partir daí, processamos para definir o valor máximo para esse canal de cor
     */
    let rMin = Number.MAX_VALUE;
    let gMin = Number.MAX_VALUE;
    let bMin = Number.MAX_VALUE;
  
    let rMax = Number.MIN_VALUE;
    let gMax = Number.MIN_VALUE;
    let bMax = Number.MIN_VALUE;
  
    rgbValues.forEach((pixel) => {
      rMin = Math.min(rMin, pixel.r);
      gMin = Math.min(gMin, pixel.g);
      bMin = Math.min(bMin, pixel.b);
  
      rMax = Math.max(rMax, pixel.r);
      gMax = Math.max(gMax, pixel.g);
      bMax = Math.max(bMax, pixel.b);
    });
  
    const rRange = rMax - rMin;
    const gRange = gMax - gMin;
    const bRange = bMax - bMin;
  
    // determine qual cor tem a maior diferença
    const biggestRange = Math.max(rRange, gRange, bRange);
    if (biggestRange === rRange) {
      return "r";
    } else if (biggestRange === gRange) {
      return "g";
    } else {
      return "b";
    }
  };
  
  /**
   * implementação de corte medio
   * saiba sobre aqui -> https://en.wikipedia.org/wiki/Median_cut
   */
  const quantization = (rgbValues, depth) => {
    const MAX_DEPTH = 4;
  
    //caso base
    if (depth === MAX_DEPTH || rgbValues.length === 0) {
      const color = rgbValues.reduce(
        (prev, curr) => {
          prev.r += curr.r;
          prev.g += curr.g;
          prev.b += curr.b;
  
          return prev;
        },
        {
          r: 0,
          g: 0,
          b: 0,
        }
      );
  
      color.r = Math.round(color.r / rgbValues.length);
      color.g = Math.round(color.g / rgbValues.length);
      color.b = Math.round(color.b / rgbValues.length);
  
      return [color];
    }
  
    /**
     * Recursivamente fazer o seguinte:
     *  1. Encontre o canal de pixel (vermelho, verde ou azul) com maior diferença/alcance
     *  2. Encomende por este canal
     *  3. Divida ao meio a lista de cores rgb
     *  4. Repita o processo novamente, até obter a profundidade desejada ou o caso base
     */
    const componentToSortBy = findBiggestColorRange(rgbValues);
    rgbValues.sort((p1, p2) => {
      return p1[componentToSortBy] - p2[componentToSortBy];
    });
  
    const mid = rgbValues.length / 2;
    return [
      ...quantization(rgbValues.slice(0, mid), depth + 1),
      ...quantization(rgbValues.slice(mid + 1), depth + 1),
    ];
  };
  
    const extrator = () => {
    const imgFile = document.getElementById("inputCover");
    const image = new Image();
    const file = imgFile.files[0];
    const fileReader = new FileReader();
  
    // Sempre que o arquivo e a imagem são carregados os mesmos são processado para extrair as informações da imagem
    fileReader.onload = () => {
      image.onload = () => {
        //Torne o tamanho do canvas igual ao da imagem()
        const canvas = document.getElementById("canvas");
        canvas.width = image.width;
        canvas.height = image.height;
        const ctx = canvas.getContext("2d");
        ctx.drawImage(image, 0, 0);
  
        /**
         * getImageData retorna uma matriz cheia de valores RGBA
         * cada pixel consiste em quatro valores: o valor vermelho da cor, o verde, o azul e o alfa
         * (transparência). Por motivos de consistência do valor da matriz,
         * o alfa não é de 0 a 1 como é no RGBA de CSS, mas de 0 a 255.
         */
        const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
  
        // converter os dados da imagem para valores rgb é muito simples
        const rgbArray = buildRgb(imageData.data);
  
        /**
         * Quantização de cor
         * Um processo que reduz o número de cores usadas em uma imagem
         * ao tentar manter visualmente a imagem original, tanto quanto possível(tapohaaaaaa)
         */
        const quantColors = quantization(rgbArray, 0);
  
        // criação da estrutura html para mudar as paletas
        buildPalette(quantColors);
      };
      image.src = fileReader.result;
    };
    fileReader.readAsDataURL(file);
  };
  
  extrator();
  