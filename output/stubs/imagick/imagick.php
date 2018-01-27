<?php
class ImagickException extends Exception  {
}
class ImagickDrawException extends Exception  {
}
class ImagickPixelIteratorException extends Exception  {
}
class ImagickPixelException extends Exception  {
}
class Imagick implements Iterator, Traversable, Countable {
	const COLOR_BLACK = 11;
	const COLOR_BLUE = 12;
	const COLOR_CYAN = 13;
	const COLOR_GREEN = 14;
	const COLOR_RED = 15;
	const COLOR_YELLOW = 16;
	const COLOR_MAGENTA = 17;
	const COLOR_OPACITY = 18;
	const COLOR_ALPHA = 19;
	const COLOR_FUZZ = 20;
	const IMAGICK_EXTNUM = 30200;
	const IMAGICK_EXTVER = "3.2.0RC1";
	const QUANTUM_RANGE = 65535;
	const USE_ZEND_MM = 0;
	const COMPOSITE_DEFAULT = 40;
	const COMPOSITE_UNDEFINED = 0;
	const COMPOSITE_NO = 1;
	const COMPOSITE_ADD = 2;
	const COMPOSITE_ATOP = 3;
	const COMPOSITE_BLEND = 4;
	const COMPOSITE_BUMPMAP = 5;
	const COMPOSITE_CLEAR = 7;
	const COMPOSITE_COLORBURN = 8;
	const COMPOSITE_COLORDODGE = 9;
	const COMPOSITE_COLORIZE = 10;
	const COMPOSITE_COPYBLACK = 11;
	const COMPOSITE_COPYBLUE = 12;
	const COMPOSITE_COPY = 13;
	const COMPOSITE_COPYCYAN = 14;
	const COMPOSITE_COPYGREEN = 15;
	const COMPOSITE_COPYMAGENTA = 16;
	const COMPOSITE_COPYOPACITY = 17;
	const COMPOSITE_COPYRED = 18;
	const COMPOSITE_COPYYELLOW = 19;
	const COMPOSITE_DARKEN = 20;
	const COMPOSITE_DSTATOP = 21;
	const COMPOSITE_DST = 22;
	const COMPOSITE_DSTIN = 23;
	const COMPOSITE_DSTOUT = 24;
	const COMPOSITE_DSTOVER = 25;
	const COMPOSITE_DIFFERENCE = 26;
	const COMPOSITE_DISPLACE = 27;
	const COMPOSITE_DISSOLVE = 28;
	const COMPOSITE_EXCLUSION = 29;
	const COMPOSITE_HARDLIGHT = 30;
	const COMPOSITE_HUE = 31;
	const COMPOSITE_IN = 32;
	const COMPOSITE_LIGHTEN = 33;
	const COMPOSITE_LUMINIZE = 35;
	const COMPOSITE_MINUS = 36;
	const COMPOSITE_MODULATE = 37;
	const COMPOSITE_MULTIPLY = 38;
	const COMPOSITE_OUT = 39;
	const COMPOSITE_OVER = 40;
	const COMPOSITE_OVERLAY = 41;
	const COMPOSITE_PLUS = 42;
	const COMPOSITE_REPLACE = 43;
	const COMPOSITE_SATURATE = 44;
	const COMPOSITE_SCREEN = 45;
	const COMPOSITE_SOFTLIGHT = 46;
	const COMPOSITE_SRCATOP = 47;
	const COMPOSITE_SRC = 48;
	const COMPOSITE_SRCIN = 49;
	const COMPOSITE_SRCOUT = 50;
	const COMPOSITE_SRCOVER = 51;
	const COMPOSITE_SUBTRACT = 52;
	const COMPOSITE_THRESHOLD = 53;
	const COMPOSITE_XOR = 54;
	const COMPOSITE_CHANGEMASK = 6;
	const COMPOSITE_LINEARLIGHT = 34;
	const COMPOSITE_DIVIDE = 55;
	const COMPOSITE_DISTORT = 56;
	const COMPOSITE_BLUR = 57;
	const COMPOSITE_PEGTOPLIGHT = 58;
	const COMPOSITE_VIVIDLIGHT = 59;
	const COMPOSITE_PINLIGHT = 60;
	const COMPOSITE_LINEARDODGE = 61;
	const COMPOSITE_LINEARBURN = 62;
	const COMPOSITE_MATHEMATICS = 63;
	const COMPOSITE_MODULUSADD = 2;
	const COMPOSITE_MODULUSSUBTRACT = 52;
	const COMPOSITE_MINUSDST = 36;
	const COMPOSITE_DIVIDEDST = 55;
	const COMPOSITE_DIVIDESRC = 64;
	const COMPOSITE_MINUSSRC = 65;
	const COMPOSITE_DARKENINTENSITY = 66;
	const COMPOSITE_LIGHTENINTENSITY = 67;
	const MONTAGEMODE_FRAME = 1;
	const MONTAGEMODE_UNFRAME = 2;
	const MONTAGEMODE_CONCATENATE = 3;
	const STYLE_NORMAL = 1;
	const STYLE_ITALIC = 2;
	const STYLE_OBLIQUE = 3;
	const STYLE_ANY = 4;
	const FILTER_UNDEFINED = 0;
	const FILTER_POINT = 1;
	const FILTER_BOX = 2;
	const FILTER_TRIANGLE = 3;
	const FILTER_HERMITE = 4;
	const FILTER_HANNING = 5;
	const FILTER_HAMMING = 6;
	const FILTER_BLACKMAN = 7;
	const FILTER_GAUSSIAN = 8;
	const FILTER_QUADRATIC = 9;
	const FILTER_CUBIC = 10;
	const FILTER_CATROM = 11;
	const FILTER_MITCHELL = 12;
	const FILTER_LANCZOS = 22;
	const FILTER_BESSEL = 13;
	const FILTER_SINC = 14;
	const FILTER_KAISER = 16;
	const FILTER_WELSH = 17;
	const FILTER_PARZEN = 18;
	const FILTER_LAGRANGE = 21;
	const FILTER_SENTINEL = 30;
	const FILTER_BOHMAN = 19;
	const FILTER_BARTLETT = 20;
	const FILTER_JINC = 13;
	const FILTER_SINCFAST = 15;
	const FILTER_ROBIDOUX = 26;
	const FILTER_LANCZOSSHARP = 23;
	const FILTER_LANCZOS2 = 24;
	const FILTER_LANCZOS2SHARP = 25;
	const FILTER_ROBIDOUXSHARP = 27;
	const FILTER_COSINE = 28;
	const IMGTYPE_UNDEFINED = 0;
	const IMGTYPE_BILEVEL = 1;
	const IMGTYPE_GRAYSCALE = 2;
	const IMGTYPE_GRAYSCALEMATTE = 3;
	const IMGTYPE_PALETTE = 4;
	const IMGTYPE_PALETTEMATTE = 5;
	const IMGTYPE_TRUECOLOR = 6;
	const IMGTYPE_TRUECOLORMATTE = 7;
	const IMGTYPE_COLORSEPARATION = 8;
	const IMGTYPE_COLORSEPARATIONMATTE = 9;
	const IMGTYPE_OPTIMIZE = 10;
	const IMGTYPE_PALETTEBILEVELMATTE = 11;
	const RESOLUTION_UNDEFINED = 0;
	const RESOLUTION_PIXELSPERINCH = 1;
	const RESOLUTION_PIXELSPERCENTIMETER = 2;
	const COMPRESSION_UNDEFINED = 0;
	const COMPRESSION_NO = 1;
	const COMPRESSION_BZIP = 2;
	const COMPRESSION_FAX = 6;
	const COMPRESSION_GROUP4 = 7;
	const COMPRESSION_JPEG = 8;
	const COMPRESSION_JPEG2000 = 9;
	const COMPRESSION_LOSSLESSJPEG = 10;
	const COMPRESSION_LZW = 11;
	const COMPRESSION_RLE = 12;
	const COMPRESSION_ZIP = 13;
	const COMPRESSION_DXT1 = 3;
	const COMPRESSION_DXT3 = 4;
	const COMPRESSION_DXT5 = 5;
	const COMPRESSION_ZIPS = 14;
	const COMPRESSION_PIZ = 15;
	const COMPRESSION_PXR24 = 16;
	const COMPRESSION_B44 = 17;
	const COMPRESSION_B44A = 18;
	const COMPRESSION_LZMA = 19;
	const COMPRESSION_JBIG1 = 20;
	const COMPRESSION_JBIG2 = 21;
	const PAINT_POINT = 1;
	const PAINT_REPLACE = 2;
	const PAINT_FLOODFILL = 3;
	const PAINT_FILLTOBORDER = 4;
	const PAINT_RESET = 5;
	const GRAVITY_NORTHWEST = 1;
	const GRAVITY_NORTH = 2;
	const GRAVITY_NORTHEAST = 3;
	const GRAVITY_WEST = 4;
	const GRAVITY_CENTER = 5;
	const GRAVITY_EAST = 6;
	const GRAVITY_SOUTHWEST = 7;
	const GRAVITY_SOUTH = 8;
	const GRAVITY_SOUTHEAST = 9;
	const STRETCH_NORMAL = 1;
	const STRETCH_ULTRACONDENSED = 2;
	const STRETCH_CONDENSED = 4;
	const STRETCH_SEMICONDENSED = 5;
	const STRETCH_SEMIEXPANDED = 6;
	const STRETCH_EXPANDED = 7;
	const STRETCH_EXTRAEXPANDED = 8;
	const STRETCH_ULTRAEXPANDED = 9;
	const STRETCH_ANY = 10;
	const ALIGN_UNDEFINED = 0;
	const ALIGN_LEFT = 1;
	const ALIGN_CENTER = 2;
	const ALIGN_RIGHT = 3;
	const DECORATION_NO = 1;
	const DECORATION_UNDERLINE = 2;
	const DECORATION_OVERLINE = 3;
	const DECORATION_LINETROUGH = 4;
	const NOISE_UNIFORM = 1;
	const NOISE_GAUSSIAN = 2;
	const NOISE_MULTIPLICATIVEGAUSSIAN = 3;
	const NOISE_IMPULSE = 4;
	const NOISE_LAPLACIAN = 5;
	const NOISE_POISSON = 6;
	const NOISE_RANDOM = 7;
	const CHANNEL_UNDEFINED = 0;
	const CHANNEL_RED = 1;
	const CHANNEL_GRAY = 128;
	const CHANNEL_CYAN = 1;
	const CHANNEL_GREEN = 2;
	const CHANNEL_MAGENTA = 2;
	const CHANNEL_BLUE = 4;
	const CHANNEL_YELLOW = 4;
	const CHANNEL_ALPHA = 8;
	const CHANNEL_OPACITY = 8;
	const CHANNEL_MATTE = 8;
	const CHANNEL_BLACK = 32;
	const CHANNEL_INDEX = 32;
	const CHANNEL_ALL = 134217727;
	const CHANNEL_DEFAULT = 134217719;
	const CHANNEL_TRUEALPHA = 64;
	const CHANNEL_RGBS = 128;
	const CHANNEL_SYNC = 256;
	const CHANNEL_COMPOSITES = 47;
	const METRIC_UNDEFINED = 0;
	const METRIC_MEANABSOLUTEERROR = 2;
	const METRIC_MEANSQUAREERROR = 4;
	const METRIC_PEAKABSOLUTEERROR = 5;
	const METRIC_PEAKSIGNALTONOISERATIO = 6;
	const METRIC_ROOTMEANSQUAREDERROR = 7;
	const PIXEL_CHAR = 1;
	const PIXEL_DOUBLE = 2;
	const PIXEL_FLOAT = 3;
	const PIXEL_INTEGER = 4;
	const PIXEL_LONG = 5;
	const PIXEL_QUANTUM = 6;
	const PIXEL_SHORT = 7;
	const EVALUATE_UNDEFINED = 0;
	const EVALUATE_ADD = 1;
	const EVALUATE_AND = 2;
	const EVALUATE_DIVIDE = 3;
	const EVALUATE_LEFTSHIFT = 4;
	const EVALUATE_MAX = 5;
	const EVALUATE_MIN = 6;
	const EVALUATE_MULTIPLY = 7;
	const EVALUATE_OR = 8;
	const EVALUATE_RIGHTSHIFT = 9;
	const EVALUATE_SET = 10;
	const EVALUATE_SUBTRACT = 11;
	const EVALUATE_XOR = 12;
	const EVALUATE_POW = 13;
	const EVALUATE_LOG = 14;
	const EVALUATE_THRESHOLD = 15;
	const EVALUATE_THRESHOLDBLACK = 16;
	const EVALUATE_THRESHOLDWHITE = 17;
	const EVALUATE_GAUSSIANNOISE = 18;
	const EVALUATE_IMPULSENOISE = 19;
	const EVALUATE_LAPLACIANNOISE = 20;
	const EVALUATE_MULTIPLICATIVENOISE = 21;
	const EVALUATE_POISSONNOISE = 22;
	const EVALUATE_UNIFORMNOISE = 23;
	const EVALUATE_COSINE = 24;
	const EVALUATE_SINE = 25;
	const EVALUATE_ADDMODULUS = 26;
	const EVALUATE_MEAN = 27;
	const EVALUATE_ABS = 28;
	const EVALUATE_EXPONENTIAL = 29;
	const EVALUATE_MEDIAN = 30;
	const EVALUATE_SUM = 31;
	const COLORSPACE_UNDEFINED = 0;
	const COLORSPACE_RGB = 1;
	const COLORSPACE_GRAY = 2;
	const COLORSPACE_TRANSPARENT = 3;
	const COLORSPACE_OHTA = 4;
	const COLORSPACE_LAB = 5;
	const COLORSPACE_XYZ = 6;
	const COLORSPACE_YCBCR = 7;
	const COLORSPACE_YCC = 8;
	const COLORSPACE_YIQ = 9;
	const COLORSPACE_YPBPR = 10;
	const COLORSPACE_YUV = 11;
	const COLORSPACE_CMYK = 12;
	const COLORSPACE_SRGB = 13;
	const COLORSPACE_HSB = 14;
	const COLORSPACE_HSL = 15;
	const COLORSPACE_HWB = 16;
	const COLORSPACE_REC601LUMA = 17;
	const COLORSPACE_REC709LUMA = 19;
	const COLORSPACE_LOG = 21;
	const COLORSPACE_CMY = 22;
	const VIRTUALPIXELMETHOD_UNDEFINED = 0;
	const VIRTUALPIXELMETHOD_BACKGROUND = 1;
	const VIRTUALPIXELMETHOD_CONSTANT = 2;
	const VIRTUALPIXELMETHOD_EDGE = 4;
	const VIRTUALPIXELMETHOD_MIRROR = 5;
	const VIRTUALPIXELMETHOD_TILE = 7;
	const VIRTUALPIXELMETHOD_TRANSPARENT = 8;
	const VIRTUALPIXELMETHOD_MASK = 9;
	const VIRTUALPIXELMETHOD_BLACK = 10;
	const VIRTUALPIXELMETHOD_GRAY = 11;
	const VIRTUALPIXELMETHOD_WHITE = 12;
	const VIRTUALPIXELMETHOD_HORIZONTALTILE = 13;
	const VIRTUALPIXELMETHOD_VERTICALTILE = 14;
	const VIRTUALPIXELMETHOD_HORIZONTALTILEEDGE = 15;
	const VIRTUALPIXELMETHOD_VERTICALTILEEDGE = 16;
	const VIRTUALPIXELMETHOD_CHECKERTILE = 17;
	const PREVIEW_UNDEFINED = 0;
	const PREVIEW_ROTATE = 1;
	const PREVIEW_SHEAR = 2;
	const PREVIEW_ROLL = 3;
	const PREVIEW_HUE = 4;
	const PREVIEW_SATURATION = 5;
	const PREVIEW_BRIGHTNESS = 6;
	const PREVIEW_GAMMA = 7;
	const PREVIEW_SPIFF = 8;
	const PREVIEW_DULL = 9;
	const PREVIEW_GRAYSCALE = 10;
	const PREVIEW_QUANTIZE = 11;
	const PREVIEW_DESPECKLE = 12;
	const PREVIEW_REDUCENOISE = 13;
	const PREVIEW_ADDNOISE = 14;
	const PREVIEW_SHARPEN = 15;
	const PREVIEW_BLUR = 16;
	const PREVIEW_THRESHOLD = 17;
	const PREVIEW_EDGEDETECT = 18;
	const PREVIEW_SPREAD = 19;
	const PREVIEW_SOLARIZE = 20;
	const PREVIEW_SHADE = 21;
	const PREVIEW_RAISE = 22;
	const PREVIEW_SEGMENT = 23;
	const PREVIEW_SWIRL = 24;
	const PREVIEW_IMPLODE = 25;
	const PREVIEW_WAVE = 26;
	const PREVIEW_OILPAINT = 27;
	const PREVIEW_CHARCOALDRAWING = 28;
	const PREVIEW_JPEG = 29;
	const RENDERINGINTENT_UNDEFINED = 0;
	const RENDERINGINTENT_SATURATION = 1;
	const RENDERINGINTENT_PERCEPTUAL = 2;
	const RENDERINGINTENT_ABSOLUTE = 3;
	const RENDERINGINTENT_RELATIVE = 4;
	const INTERLACE_UNDEFINED = 0;
	const INTERLACE_NO = 1;
	const INTERLACE_LINE = 2;
	const INTERLACE_PLANE = 3;
	const INTERLACE_PARTITION = 4;
	const INTERLACE_GIF = 5;
	const INTERLACE_JPEG = 6;
	const INTERLACE_PNG = 7;
	const FILLRULE_UNDEFINED = 0;
	const FILLRULE_EVENODD = 1;
	const FILLRULE_NONZERO = 2;
	const PATHUNITS_UNDEFINED = 0;
	const PATHUNITS_USERSPACE = 1;
	const PATHUNITS_USERSPACEONUSE = 2;
	const PATHUNITS_OBJECTBOUNDINGBOX = 3;
	const LINECAP_UNDEFINED = 0;
	const LINECAP_BUTT = 1;
	const LINECAP_ROUND = 2;
	const LINECAP_SQUARE = 3;
	const LINEJOIN_UNDEFINED = 0;
	const LINEJOIN_MITER = 1;
	const LINEJOIN_ROUND = 2;
	const LINEJOIN_BEVEL = 3;
	const RESOURCETYPE_UNDEFINED = 0;
	const RESOURCETYPE_AREA = 1;
	const RESOURCETYPE_DISK = 2;
	const RESOURCETYPE_FILE = 3;
	const RESOURCETYPE_MAP = 4;
	const RESOURCETYPE_MEMORY = 5;
	const DISPOSE_UNRECOGNIZED = 0;
	const DISPOSE_UNDEFINED = 0;
	const DISPOSE_NONE = 1;
	const DISPOSE_BACKGROUND = 2;
	const DISPOSE_PREVIOUS = 3;
	const INTERPOLATE_UNDEFINED = 0;
	const INTERPOLATE_AVERAGE = 1;
	const INTERPOLATE_BICUBIC = 2;
	const INTERPOLATE_BILINEAR = 3;
	const INTERPOLATE_FILTER = 4;
	const INTERPOLATE_INTEGER = 5;
	const INTERPOLATE_MESH = 6;
	const INTERPOLATE_NEARESTNEIGHBOR = 7;
	const INTERPOLATE_SPLINE = 8;
	const LAYERMETHOD_UNDEFINED = 0;
	const LAYERMETHOD_COALESCE = 1;
	const LAYERMETHOD_COMPAREANY = 2;
	const LAYERMETHOD_COMPARECLEAR = 3;
	const LAYERMETHOD_COMPAREOVERLAY = 4;
	const LAYERMETHOD_DISPOSE = 5;
	const LAYERMETHOD_OPTIMIZE = 6;
	const LAYERMETHOD_OPTIMIZEPLUS = 8;
	const LAYERMETHOD_OPTIMIZETRANS = 9;
	const LAYERMETHOD_COMPOSITE = 12;
	const LAYERMETHOD_OPTIMIZEIMAGE = 7;
	const LAYERMETHOD_REMOVEDUPS = 10;
	const LAYERMETHOD_REMOVEZERO = 11;
	const LAYERMETHOD_MERGE = 13;
	const LAYERMETHOD_FLATTEN = 14;
	const LAYERMETHOD_MOSAIC = 15;
	const LAYERMETHOD_TRIMBOUNDS = 16;
	const ORIENTATION_UNDEFINED = 0;
	const ORIENTATION_TOPLEFT = 1;
	const ORIENTATION_TOPRIGHT = 2;
	const ORIENTATION_BOTTOMRIGHT = 3;
	const ORIENTATION_BOTTOMLEFT = 4;
	const ORIENTATION_LEFTTOP = 5;
	const ORIENTATION_RIGHTTOP = 6;
	const ORIENTATION_RIGHTBOTTOM = 7;
	const ORIENTATION_LEFTBOTTOM = 8;
	const DISTORTION_UNDEFINED = 0;
	const DISTORTION_AFFINE = 1;
	const DISTORTION_AFFINEPROJECTION = 2;
	const DISTORTION_ARC = 9;
	const DISTORTION_BILINEAR = 6;
	const DISTORTION_PERSPECTIVE = 4;
	const DISTORTION_PERSPECTIVEPROJECTION = 5;
	const DISTORTION_SCALEROTATETRANSLATE = 3;
	const DISTORTION_POLYNOMIAL = 8;
	const DISTORTION_POLAR = 10;
	const DISTORTION_DEPOLAR = 11;
	const DISTORTION_BARREL = 14;
	const DISTORTION_BARRELINVERSE = 15;
	const DISTORTION_SHEPARDS = 16;
	const DISTORTION_SENTINEL = 18;
	const DISTORTION_BILINEARFORWARD = 6;
	const DISTORTION_BILINEARREVERSE = 7;
	const DISTORTION_RESIZE = 17;
	const DISTORTION_CYLINDER2PLANE = 12;
	const DISTORTION_PLANE2CYLINDER = 13;
	const ALPHACHANNEL_ACTIVATE = 1;
	const ALPHACHANNEL_DEACTIVATE = 4;
	const ALPHACHANNEL_RESET = 7;
	const ALPHACHANNEL_SET = 8;
	const ALPHACHANNEL_UNDEFINED = 0;
	const ALPHACHANNEL_COPY = 3;
	const ALPHACHANNEL_EXTRACT = 5;
	const ALPHACHANNEL_OPAQUE = 6;
	const ALPHACHANNEL_SHAPE = 9;
	const ALPHACHANNEL_TRANSPARENT = 10;
	const SPARSECOLORMETHOD_UNDEFINED = 0;
	const SPARSECOLORMETHOD_BARYCENTRIC = 1;
	const SPARSECOLORMETHOD_BILINEAR = 7;
	const SPARSECOLORMETHOD_POLYNOMIAL = 8;
	const SPARSECOLORMETHOD_SPEPARDS = 16;
	const SPARSECOLORMETHOD_VORONOI = 18;
	const DITHERMETHOD_UNDEFINED = 0;
	const DITHERMETHOD_NO = 1;
	const DITHERMETHOD_RIEMERSMA = 2;
	const DITHERMETHOD_FLOYDSTEINBERG = 3;
	const FUNCTION_UNDEFINED = 0;
	const FUNCTION_POLYNOMIAL = 1;
	const FUNCTION_SINUSOID = 2;
	public function optimizeImageLayers () {}
	public function compareImageLayers ($method) {}
	public function pingImageBlob ($image) {}
	public function pingImageFile ($filehandle, $fileName = null) {}
	public function transposeImage () {}
	public function transverseImage () {}
	public function trimImage ($fuzz) {}
	public function waveImage ($amplitude, $length) {}
	public function vignetteImage ($blackPoint, $whitePoint, $x, $y) {}
	public function uniqueImageColors () {}
	public function getImageMatte () {}
	public function setImageMatte ($matte) {}
	public function adaptiveResizeImage ($columns, $rows, $bestfit = false) {}
	public function sketchImage ($radius, $sigma, $angle) {}
	public function shadeImage ($gray, $azimuth, $elevation) {}
	public function getSizeOffset () {}
	public function setSizeOffset ($columns, $rows, $offset) {}
	public function adaptiveBlurImage ($radius, $sigma, $channel = Imagick::CHANNEL_DEFAULT) {}
	public function contrastStretchImage ($black_point, $white_point, $channel = Imagick::CHANNEL_ALL) {}
	public function adaptiveSharpenImage ($radius, $sigma, $channel = Imagick::CHANNEL_DEFAULT) {}
	public function randomThresholdImage ($low, $high, $channel = Imagick::CHANNEL_ALL) {}
	public function roundCornersImage ($xRounding, $yRounding, $strokeWidth, $displace, $sizeCorrection) {}
	public function roundCorners ($x_rounding, $y_rounding, $stroke_width = 10.0, $displace = 5.0, $size_correction = -6.0) {}
	public function setIteratorIndex ($index) {}
	public function getIteratorIndex () {}
	public function transformImage ($crop, $geometry) {}
	public function setImageOpacity ($opacity) {}
	public function orderedPosterizeImage ($threshold_map, $channel = Imagick::CHANNEL_ALL) {}
	public function polaroidImage (ImagickDraw $properties, $angle) {}
	public function getImageProperty ($name) {}
	public function setImageProperty ($name, $value) {}
	public function setImageInterpolateMethod ($method) {}
	public function getImageInterpolateMethod () {}
	public function linearStretchImage ($blackPoint, $whitePoint) {}
	public function getImageLength () {}
	public function extentImage ($width, $height, $x, $y) {}
	public function getImageOrientation () {}
	public function setImageOrientation ($orientation) {}
	public function paintFloodfillImage ($fill, $fuzz, $bordercolor, $x, $y, $channel = Imagick::CHANNEL_ALL) {}
	public function clutImage (Imagick $lookup_table, $channel = Imagick::CHANNEL_DEFAULT) {}
	public function getImageProperties ($pattern = "*", $only_names = true) {}
	public function getImageProfiles ($pattern = "*", $only_names = true) {}
	public function distortImage ($method, array $arguments, $bestfit) {}
	public function writeImageFile ($filehandle) {}
	public function writeImagesFile ($filehandle) {}
	public function resetImagePage ($page) {}
	public function setImageClipMask (Imagick $clip_mask) {}
	public function getImageClipMask () {}
	public function animateImages ($x_server) {}
	public function recolorImage (array $matrix) {}
	public function setFont ($font) {}
	public function getFont () {}
	public function setPointSize ($point_size) {}
	public function getPointSize () {}
	public function mergeImageLayers ($layer_method) {}
	public function setImageAlphaChannel ($mode) {}
	public function floodFillPaintImage ($fill, $fuzz, $target, $x, $y, $invert, $channel = Imagick::CHANNEL_DEFAULT) {}
	public function opaquePaintImage ($target, $fill, $fuzz, $invert, $channel = Imagick::CHANNEL_DEFAULT) {}
	public function transparentPaintImage ($target, $alpha, $fuzz, $invert) {}
	public function liquidRescaleImage ($width, $height, $delta_x, $rigidity) {}
	public function encipherImage ($passphrase) {}
	public function decipherImage ($passphrase) {}
	public function setGravity ($gravity) {}
	public function getGravity () {}
	public function getImageChannelRange ($channel) {}
	public function getImageAlphaChannel () {}
	public function getImageChannelDistortions (Imagick $reference, $metric, $channel = Imagick::CHANNEL_DEFAULT) {}
	public function setImageGravity ($gravity) {}
	public function getImageGravity () {}
	public function importImagePixels ($x, $y, $width, $height, $map, $storage, array $pixels) {}
	public function deskewImage ($threshold) {}
	public function segmentImage ($COLORSPACE, $cluster_threshold, $smooth_threshold, $verbose = false) {}
	public function sparseColorImage ($SPARSE_METHOD, array $arguments, $channel = Imagick::CHANNEL_DEFAULT) {}
	public function remapImage (Imagick $replacement, $DITHER) {}
	public function exportImagePixels ($x, $y, $width, $height, $map, $STORAGE) {}
	public function getImageChannelKurtosis ($channel = Imagick::CHANNEL_DEFAULT) {}
	public function functionImage ($function, array $arguments, $channel = Imagick::CHANNEL_DEFAULT) {}
	public function transformImageColorspace ($COLORSPACE) {}
	public function haldClutImage (Imagick $clut, $channel = Imagick::CHANNEL_DEFAULT) {}
	public function autoLevelImage ($CHANNEL) {}
	public function blueShiftImage ($factor) {}
	public function getImageArtifact ($artifact) {}
	public function setImageArtifact ($artifact, $value) {}
	public function deleteImageArtifact ($artifact) {}
	public function getColorspace () {}
	public function setColorspace ($COLORSPACE) {}
	public function clampImage ($CHANNEL) {}
	public function smushImages ($stack, $offset) {}
	public function __construct ($files = null) {}
	public function __toString () {}
	public function count () {}
	public function getPixelIterator () {}
	public function getPixelRegionIterator ($x, $y, $columns, $rows) {}
	public function readImage ($filename) {}
	public function readImages ($filenames) {}
	public function readImageBlob ($image, $filename = null) {}
	public function setImageFormat ($format) {}
	public function scaleImage ($cols, $rows, $bestfit = false) {}
	public function writeImage ($filename = NULL) {}
	public function writeImages ($filename, $adjoin) {}
	public function blurImage ($radius, $sigma, $channel = null) {}
	public function thumbnailImage ($columns, $rows, $bestfit = false, $fill = false) {}
	public function cropThumbnailImage ($width, $height) {}
	public function getImageFilename () {}
	public function setImageFilename ($filename) {}
	public function getImageFormat () {}
	public function getImageMimeType () {}
	public function removeImage () {}
	public function destroy () {}
	public function clear () {}
	public function getImageSize () {}
	public function getImageBlob () {}
	public function getImagesBlob () {}
	public function setFirstIterator () {}
	public function setLastIterator () {}
	public function resetIterator () {}
	public function previousImage () {}
	public function nextImage () {}
	public function hasPreviousImage () {}
	public function hasNextImage () {}
	public function setImageIndex ($index) {}
	public function getImageIndex () {}
	public function commentImage ($comment) {}
	public function cropImage ($width, $height, $x, $y) {}
	public function labelImage ($label) {}
	public function getImageGeometry () {}
	public function drawImage (ImagickDraw $draw) {}
	public function setImageCompressionQuality ($quality) {}
	public function getImageCompressionQuality () {}
	public function annotateImage (ImagickDraw $draw_settings, $x, $y, $angle, $text) {}
	public function compositeImage (Imagick $composite_object, $composite, $x, $y, $channel = Imagick::CHANNEL_ALL) {}
	public function modulateImage ($brightness, $saturation, $hue) {}
	public function getImageColors () {}
	public function montageImage (ImagickDraw $draw, $tile_geometry, $thumbnail_geometry, $mode, $frame) {}
	public function identifyImage ($appendRawOutput = false) {}
	public function thresholdImage ($threshold, $channel = Imagick::CHANNEL_ALL) {}
	public function adaptiveThresholdImage ($width, $height, $offset) {}
	public function blackThresholdImage ($threshold) {}
	public function whiteThresholdImage ($threshold) {}
	public function appendImages ($stack = false) {}
	public function charcoalImage ($radius, $sigma) {}
	public function normalizeImage ($channel = Imagick::CHANNEL_ALL) {}
	public function oilPaintImage ($radius) {}
	public function posterizeImage ($levels, $dither) {}
	public function radialBlurImage ($angle, $channel = Imagick::CHANNEL_ALL) {}
	public function raiseImage ($width, $height, $x, $y, $raise) {}
	public function resampleImage ($x_resolution, $y_resolution, $filter, $blur) {}
	public function resizeImage ($columns, $rows, $filter, $blur, $bestfit = false) {}
	public function rollImage ($x, $y) {}
	public function rotateImage ($background, $degrees) {}
	public function sampleImage ($columns, $rows) {}
	public function solarizeImage ($threshold) {}
	public function shadowImage ($opacity, $sigma, $x, $y) {}
	public function setImageAttribute ($key, $value) {}
	public function setImageBackgroundColor ($background) {}
	public function setImageCompose ($compose) {}
	public function setImageCompression ($compression) {}
	public function setImageDelay ($delay) {}
	public function setImageDepth ($depth) {}
	public function setImageGamma ($gamma) {}
	public function setImageIterations ($iterations) {}
	public function setImageMatteColor ($matte) {}
	public function setImagePage ($width, $height, $x, $y) {}
	public function setImageProgressMonitor ($filename) {}
	public function setImageResolution ($x_resolution, $y_resolution) {}
	public function setImageScene ($scene) {}
	public function setImageTicksPerSecond ($ticks_per_second) {}
	public function setImageType ($image_type) {}
	public function setImageUnits ($units) {}
	public function sharpenImage ($radius, $sigma, $channel = Imagick::CHANNEL_ALL) {}
	public function shaveImage ($columns, $rows) {}
	public function shearImage ($background, $x_shear, $y_shear) {}
	public function spliceImage ($width, $height, $x, $y) {}
	public function pingImage ($filename) {}
	public function readImageFile ($filehandle, $fileName = null) {}
	public function displayImage ($servername) {}
	public function displayImages ($servername) {}
	public function spreadImage ($radius) {}
	public function swirlImage ($degrees) {}
	public function stripImage () {}
	public static function queryFormats ($pattern = "*") {}
	public static function queryFonts ($pattern = "*") {}
	public function queryFontMetrics (ImagickDraw $properties, $text, $multiline = null) {}
	public function steganoImage (Imagick $watermark_wand, $offset) {}
	public function addNoiseImage ($noise_type, $channel = Imagick::CHANNEL_DEFAULT) {}
	public function motionBlurImage ($radius, $sigma, $angle, $channel = Imagick::CHANNEL_DEFAULT) {}
	public function mosaicImages () {}
	public function morphImages ($number_frames) {}
	public function minifyImage () {}
	public function affineTransformImage (ImagickDraw $matrix) {}
	public function averageImages () {}
	public function borderImage ($bordercolor, $width, $height) {}
	public function chopImage ($width, $height, $x, $y) {}
	public function clipImage () {}
	public function clipPathImage ($pathname, $inside) {}
	public function clipImagePath ($pathname, $inside) {}
	public function coalesceImages () {}
	public function colorFloodfillImage ($fill, $fuzz, $bordercolor, $x, $y) {}
	public function colorizeImage ($colorize, $opacity) {}
	public function compareImageChannels (Imagick $image, $channelType, $metricType) {}
	public function compareImages (Imagick $compare, $metric) {}
	public function contrastImage ($sharpen) {}
	public function combineImages ($channelType) {}
	public function convolveImage (array $kernel, $channel = Imagick::CHANNEL_ALL) {}
	public function cycleColormapImage ($displace) {}
	public function deconstructImages () {}
	public function despeckleImage () {}
	public function edgeImage ($radius) {}
	public function embossImage ($radius, $sigma) {}
	public function enhanceImage () {}
	public function equalizeImage () {}
	public function evaluateImage ($op, $constant, $channel = Imagick::CHANNEL_ALL) {}
	public function flattenImages () {}
	public function flipImage () {}
	public function flopImage () {}
	public function frameImage ($matte_color, $width, $height, $inner_bevel, $outer_bevel) {}
	public function fxImage ($expression, $channel = Imagick::CHANNEL_ALL) {}
	public function gammaImage ($gamma, $channel = Imagick::CHANNEL_ALL) {}
	public function gaussianBlurImage ($radius, $sigma, $channel = Imagick::CHANNEL_ALL) {}
	public function getImageAttribute ($key) {}
	public function getImageBackgroundColor () {}
	public function getImageBluePrimary () {}
	public function getImageBorderColor () {}
	public function getImageChannelDepth ($channel) {}
	public function getImageChannelDistortion (Imagick $reference, $channel, $metric) {}
	public function getImageChannelExtrema ($channel) {}
	public function getImageChannelMean ($channel) {}
	public function getImageChannelStatistics () {}
	public function getImageColormapColor ($index) {}
	public function getImageColorspace () {}
	public function getImageCompose () {}
	public function getImageDelay () {}
	public function getImageDepth () {}
	public function getImageDistortion (Imagick $reference, $metric) {}
	public function getImageExtrema () {}
	public function getImageDispose () {}
	public function getImageGamma () {}
	public function getImageGreenPrimary () {}
	public function getImageHeight () {}
	public function getImageHistogram () {}
	public function getImageInterlaceScheme () {}
	public function getImageIterations () {}
	public function getImageMatteColor () {}
	public function getImagePage () {}
	public function getImagePixelColor ($x, $y) {}
	public function getImageProfile ($name) {}
	public function getImageRedPrimary () {}
	public function getImageRenderingIntent () {}
	public function getImageResolution () {}
	public function getImageScene () {}
	public function getImageSignature () {}
	public function getImageTicksPerSecond () {}
	public function getImageType () {}
	public function getImageUnits () {}
	public function getImageVirtualPixelMethod () {}
	public function getImageWhitePoint () {}
	public function getImageWidth () {}
	public function getNumberImages () {}
	public function getImageTotalInkDensity () {}
	public function getImageRegion ($width, $height, $x, $y) {}
	public function implodeImage ($radius) {}
	public function levelImage ($blackPoint, $gamma, $whitePoint, $channel = Imagick::CHANNEL_ALL) {}
	public function magnifyImage () {}
	public function mapImage (Imagick $map, $dither) {}
	public function matteFloodfillImage ($alpha, $fuzz, $bordercolor, $x, $y) {}
	public function medianFilterImage ($radius) {}
	public function negateImage ($gray, $channel = Imagick::CHANNEL_ALL) {}
	public function paintOpaqueImage ($target, $fill, $fuzz, $channel = Imagick::CHANNEL_ALL) {}
	public function paintTransparentImage ($target, $alpha, $fuzz) {}
	public function previewImages ($preview) {}
	public function profileImage ($name, $profile) {}
	public function quantizeImage ($numberColors, $colorspace, $treedepth, $dither, $measureError) {}
	public function quantizeImages ($numberColors, $colorspace, $treedepth, $dither, $measureError) {}
	public function reduceNoiseImage ($radius) {}
	public function removeImageProfile ($name) {}
	public function separateImageChannel ($channel) {}
	public function sepiaToneImage ($threshold) {}
	public function setImageBias ($bias) {}
	public function setImageBluePrimary ($x, $y) {}
	public function setImageBorderColor ($border) {}
	public function setImageChannelDepth ($channel, $depth) {}
	public function setImageColormapColor ($index, ImagickPixel $color) {}
	public function setImageColorspace ($colorspace) {}
	public function setImageDispose ($dispose) {}
	public function setImageExtent ($columns, $rows) {}
	public function setImageGreenPrimary ($x, $y) {}
	public function setImageInterlaceScheme ($interlace_scheme) {}
	public function setImageProfile ($name, $profile) {}
	public function setImageRedPrimary ($x, $y) {}
	public function setImageRenderingIntent ($rendering_intent) {}
	public function setImageVirtualPixelMethod ($method) {}
	public function setImageWhitePoint ($x, $y) {}
	public function sigmoidalContrastImage ($sharpen, $alpha, $beta, $channel = Imagick::CHANNEL_ALL) {}
	public function stereoImage (Imagick $offset_wand) {}
	public function textureImage (Imagick $texture_wand) {}
	public function tintImage ($tint, $opacity) {}
	public function unsharpMaskImage ($radius, $sigma, $amount, $threshold, $channel = Imagick::CHANNEL_ALL) {}
	public function getImage () {}
	public function addImage (Imagick $source) {}
	public function setImage (Imagick $replace) {}
	public function newImage ($cols, $rows, $background, $format = null) {}
	public function newPseudoImage ($columns, $rows, $pseudoString) {}
	public function getCompression () {}
	public function getCompressionQuality () {}
	public static function getCopyright () {}
	public function getFilename () {}
	public function getFormat () {}
	public static function getHomeURL () {}
	public function getInterlaceScheme () {}
	public function getOption ($key) {}
	public static function getPackageName () {}
	public function getPage () {}
	public static function getQuantumDepth () {}
	public static function getQuantumRange () {}
	public static function getReleaseDate () {}
	public static function getResource ($type) {}
	public static function getResourceLimit ($type) {}
	public function getSamplingFactors () {}
	public function getSize () {}
	public static function getVersion () {}
	public function setBackgroundColor ($background) {}
	public function setCompression ($compression) {}
	public function setCompressionQuality ($quality) {}
	public function setFilename ($filename) {}
	public function setFormat ($format) {}
	public function setInterlaceScheme ($interlace_scheme) {}
	public function setOption ($key, $value) {}
	public function setPage ($width, $height, $x, $y) {}
	public static function setResourceLimit ($type, $limit) {}
	public function setResolution ($x_resolution, $y_resolution) {}
	public function setSamplingFactors (array $factors) {}
	public function setSize ($columns, $rows) {}
	public function setType ($image_type) {}
	public function key () {}
	public function next () {}
	public function rewind () {}
	public function valid () {}
	public function current () {}
}
class ImagickDraw  {
	public function resetVectorGraphics () {}
	public function getTextKerning () {}
	public function setTextKerning ($kerning) {}
	public function getTextInterWordSpacing () {}
	public function setTextInterWordSpacing ($spacing) {}
	public function getTextInterLineSpacing () {}
	public function setTextInterLineSpacing ($spacing) {}
	public function __construct () {}
	public function setFillColor (ImagickPixel $fill_pixel) {}
	public function setFillAlpha ($opacity) {}
	public function setResolution ($x_resolution, $y_resolution) {}
	public function setStrokeColor (ImagickPixel $stroke_pixel) {}
	public function setStrokeAlpha ($opacity) {}
	public function setStrokeWidth ($stroke_width) {}
	public function clear () {}
	public function circle ($ox, $oy, $px, $py) {}
	public function annotation ($x, $y, $text) {}
	public function setTextAntialias ($antiAlias) {}
	public function setTextEncoding ($encoding) {}
	public function setFont ($font_name) {}
	public function setFontFamily ($font_family) {}
	public function setFontSize ($pointsize) {}
	public function setFontStyle ($style) {}
	public function setFontWeight ($font_weight) {}
	public function getFont () {}
	public function getFontFamily () {}
	public function getFontSize () {}
	public function getFontStyle () {}
	public function getFontWeight () {}
	public function destroy () {}
	public function rectangle ($x1, $y1, $x2, $y2) {}
	public function roundRectangle ($x1, $y1, $x2, $y2, $rx, $ry) {}
	public function ellipse ($ox, $oy, $rx, $ry, $start, $end) {}
	public function skewX ($degrees) {}
	public function skewY ($degrees) {}
	public function translate ($x, $y) {}
	public function line ($sx, $sy, $ex, $ey) {}
	public function arc ($sx, $sy, $ex, $ey, $sd, $ed) {}
	public function matte ($x, $y, $paintMethod) {}
	public function polygon (array $coordinates) {}
	public function point ($x, $y) {}
	public function getTextDecoration () {}
	public function getTextEncoding () {}
	public function getFontStretch () {}
	public function setFontStretch ($fontStretch) {}
	public function setStrokeAntialias ($stroke_antialias) {}
	public function setTextAlignment ($alignment) {}
	public function setTextDecoration ($decoration) {}
	public function setTextUnderColor (ImagickPixel $under_color) {}
	public function setViewbox ($x1, $y1, $x2, $y2) {}
	public function affine (array $affine) {}
	public function bezier (array $coordinates) {}
	public function composite ($compose, $x, $y, $width, $height, Imagick $compositeWand) {}
	public function color ($x, $y, $paintMethod) {}
	public function comment ($comment) {}
	public function getClipPath () {}
	public function getClipRule () {}
	public function getClipUnits () {}
	public function getFillColor () {}
	public function getFillOpacity () {}
	public function getFillRule () {}
	public function getGravity () {}
	public function getStrokeAntialias () {}
	public function getStrokeColor () {}
	public function getStrokeDashArray () {}
	public function getStrokeDashOffset () {}
	public function getStrokeLineCap () {}
	public function getStrokeLineJoin () {}
	public function getStrokeMiterLimit () {}
	public function getStrokeOpacity () {}
	public function getStrokeWidth () {}
	public function getTextAlignment () {}
	public function getTextAntialias () {}
	public function getVectorGraphics () {}
	public function getTextUnderColor () {}
	public function pathClose () {}
	public function pathCurveToAbsolute ($x1, $y1, $x2, $y2, $x, $y) {}
	public function pathCurveToRelative ($x1, $y1, $x2, $y2, $x, $y) {}
	public function pathCurveToQuadraticBezierAbsolute ($x1, $y1, $x, $y) {}
	public function pathCurveToQuadraticBezierRelative ($x1, $y1, $x, $y) {}
	public function pathCurveToQuadraticBezierSmoothAbsolute ($x, $y) {}
	public function pathCurveToQuadraticBezierSmoothRelative ($x, $y) {}
	public function pathCurveToSmoothAbsolute ($x2, $y2, $x, $y) {}
	public function pathCurveToSmoothRelative ($x2, $y2, $x, $y) {}
	public function pathEllipticArcAbsolute ($rx, $ry, $x_axis_rotation, $large_arc_flag, $sweep_flag, $x, $y) {}
	public function pathEllipticArcRelative ($rx, $ry, $x_axis_rotation, $large_arc_flag, $sweep_flag, $x, $y) {}
	public function pathFinish () {}
	public function pathLineToAbsolute ($x, $y) {}
	public function pathLineToRelative ($x, $y) {}
	public function pathLineToHorizontalAbsolute ($x) {}
	public function pathLineToHorizontalRelative ($x) {}
	public function pathLineToVerticalAbsolute ($y) {}
	public function pathLineToVerticalRelative ($y) {}
	public function pathMoveToAbsolute ($x, $y) {}
	public function pathMoveToRelative ($x, $y) {}
	public function pathStart () {}
	public function polyline (array $coordinates) {}
	public function popClipPath () {}
	public function popDefs () {}
	public function popPattern () {}
	public function pushClipPath ($clip_mask_id) {}
	public function pushDefs () {}
	public function pushPattern ($pattern_id, $x, $y, $width, $height) {}
	public function render () {}
	public function rotate ($degrees) {}
	public function scale ($x, $y) {}
	public function setClipPath ($clip_mask) {}
	public function setClipRule ($fill_rule) {}
	public function setClipUnits ($clip_units) {}
	public function setFillOpacity ($fillOpacity) {}
	public function setFillPatternURL ($fill_url) {}
	public function setFillRule ($fill_rule) {}
	public function setGravity ($gravity) {}
	public function setStrokePatternURL ($stroke_url) {}
	public function setStrokeDashOffset ($dash_offset) {}
	public function setStrokeLineCap ($linecap) {}
	public function setStrokeLineJoin ($linejoin) {}
	public function setStrokeMiterLimit ($miterlimit) {}
	public function setStrokeOpacity ($stroke_opacity) {}
	public function setVectorGraphics ($xml) {}
	public function pop () {}
	public function push () {}
	public function setStrokeDashArray (array $dashArray) {}
}
class ImagickPixelIterator implements Iterator, Traversable {
	public function __construct (Imagick $wand) {}
	public function newPixelIterator (Imagick $wand) {}
	public function newPixelRegionIterator (Imagick $wand, $x, $y, $columns, $rows) {}
	public function getIteratorRow () {}
	public function setIteratorRow ($row) {}
	public function setIteratorFirstRow () {}
	public function setIteratorLastRow () {}
	public function getPreviousIteratorRow () {}
	public function getCurrentIteratorRow () {}
	public function getNextIteratorRow () {}
	public function resetIterator () {}
	public function syncIterator () {}
	public function destroy () {}
	public function clear () {}
	public static function getpixeliterator (Imagick $Imagick) {}
	public static function getpixelregioniterator (Imagick $Imagick, $x, $y, $columns, $rows) {}
	public function key () {}
	public function next () {}
	public function rewind () {}
	public function current () {}
	public function valid () {}
}
class ImagickPixel  {
	public function getHSL () {}
	public function setHSL ($hue, $saturation, $luminosity) {}
	public function getColorValueQuantum () {}
	public function setColorValueQuantum ($color_value) {}
	public function getIndex () {}
	public function setIndex ($index) {}
	public function __construct ($color = null) {}
	public function setColor ($color) {}
	public function setColorValue ($color, $value) {}
	public function getColorValue ($color) {}
	public function clear () {}
	public function destroy () {}
	public function isSimilar (ImagickPixel $color, $fuzz) {}
	public function isPixelSimilar (ImagickPixel $color, $fuzz) {}
	public function getColor ($normalized = false) {}
	public function getColorAsString () {}
	public function getColorCount () {}
	public function setColorCount ($colorCount) {}
}
