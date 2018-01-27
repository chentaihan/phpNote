<?php
class Gmagick
{
    const COLOR_BLACK = 0;
    const COLOR_BLUE = 0;
    const COLOR_CYAN = 0;
    const COLOR_GREEN = 0;
    const COLOR_RED = 0;
    const COLOR_YELLOW = 0;
    const COLOR_MAGENTA = 0;
    const COLOR_OPACITY = 0;
    const COLOR_ALPHA = 0;
    const COLOR_FUZZ = 0;
    const GMAGICK_EXTNUM = 0;
    const COMPOSITE_DEFAULT = 0;
    const COMPOSITE_UNDEFINED = 0;
    const COMPOSITE_NO = 0;
    const COMPOSITE_ADD = 0;
    const COMPOSITE_ATOP = 0;
    const COMPOSITE_BUMPMAP = 0;
    const COMPOSITE_CLEAR = 0;
    const COMPOSITE_COLORIZE = 0;
    const COMPOSITE_COPYBLACK = 0;
    const COMPOSITE_COPYBLUE = 0;
    const COMPOSITE_COPY = 0;
    const COMPOSITE_COPYCYAN = 0;
    const COMPOSITE_COPYGREEN = 0;
    const COMPOSITE_COPYMAGENTA = 0;
    const COMPOSITE_COPYOPACITY = 0;
    const COMPOSITE_COPYRED = 0;
    const COMPOSITE_COPYYELLOW = 0;
    const COMPOSITE_DARKEN = 0;
    const COMPOSITE_DIFFERENCE = 0;
    const COMPOSITE_DISPLACE = 0;
    const COMPOSITE_DISSOLVE = 0;
    const COMPOSITE_HUE = 0;
    const COMPOSITE_IN = 0;
    const COMPOSITE_LIGHTEN = 0;
    const COMPOSITE_LUMINIZE = 0;
    const COMPOSITE_MINUS = 0;
    const COMPOSITE_MODULATE = 0;
    const COMPOSITE_MULTIPLY = 0;
    const COMPOSITE_OUT = 0;
    const COMPOSITE_OVER = 0;
    const COMPOSITE_OVERLAY = 0;
    const COMPOSITE_PLUS = 0;
    const COMPOSITE_REPLACE = 0;
    const COMPOSITE_SATURATE = 0;
    const COMPOSITE_SCREEN = 0;
    const COMPOSITE_SUBTRACT = 0;
    const COMPOSITE_THRESHOLD = 0;
    const COMPOSITE_XOR = 0;
    const COMPOSITE_DIVIDE = 0;
    const COMPOSITE_HARDLIGHT = 0;
    const COMPOSITE_EXCLUSION = 0;
    const COMPOSITE_COLORDODGE = 0;
    const COMPOSITE_COLORBURN = 0;
    const COMPOSITE_SOFTLIGHT = 0;
    const COMPOSITE_LINEARBURN = 0;
    const COMPOSITE_LINEARDODGE = 0;
    const COMPOSITE_LINEARLIGHT = 0;
    const COMPOSITE_VIVIDLIGHT = 0;
    const COMPOSITE_PINLIGHT = 0;
    const COMPOSITE_HARDMIX = 0;
    const MONTAGEMODE_FRAME = 0;
    const MONTAGEMODE_UNFRAME = 0;
    const MONTAGEMODE_CONCATENATE = 0;
    const STYLE_NORMAL = 0;
    const STYLE_ITALIC = 0;
    const STYLE_OBLIQUE = 0;
    const STYLE_ANY = 0;
    const FILTER_UNDEFINED = 0;
    const FILTER_POINT = 0;
    const FILTER_BOX = 0;
    const FILTER_TRIANGLE = 0;
    const FILTER_HERMITE = 0;
    const FILTER_HANNING = 0;
    const FILTER_HAMMING = 0;
    const FILTER_BLACKMAN = 0;
    const FILTER_GAUSSIAN = 0;
    const FILTER_QUADRATIC = 0;
    const FILTER_CUBIC = 0;
    const FILTER_CATROM = 0;
    const FILTER_MITCHELL = 0;
    const FILTER_LANCZOS = 0;
    const FILTER_BESSEL = 0;
    const FILTER_SINC = 0;
    const IMGTYPE_UNDEFINED = 0;
    const IMGTYPE_BILEVEL = 0;
    const IMGTYPE_GRAYSCALE = 0;
    const IMGTYPE_GRAYSCALEMATTE = 0;
    const IMGTYPE_PALETTE = 0;
    const IMGTYPE_PALETTEMATTE = 0;
    const IMGTYPE_TRUECOLOR = 0;
    const IMGTYPE_TRUECOLORMATTE = 0;
    const IMGTYPE_COLORSEPARATION = 0;
    const IMGTYPE_COLORSEPARATIONMATTE = 0;
    const IMGTYPE_OPTIMIZE = 0;
    const RESOLUTION_UNDEFINED = 0;
    const RESOLUTION_PIXELSPERINCH = 0;
    const RESOLUTION_PIXELSPERCENTIMETER = 0;
    const COMPRESSION_UNDEFINED = 0;
    const COMPRESSION_NO = 0;
    const COMPRESSION_BZIP = 0;
    const COMPRESSION_FAX = 0;
    const COMPRESSION_GROUP4 = 0;
    const COMPRESSION_JPEG = 0;
    const COMPRESSION_LOSSLESSJPEG = 0;
    const COMPRESSION_LZW = 0;
    const COMPRESSION_RLE = 0;
    const COMPRESSION_ZIP = 0;
    const COMPRESSION_GROUP3 = 0;
    const COMPRESSION_LZMA = 0;
    const COMPRESSION_JPEG2000 = 0;
    const COMPRESSION_JBIG1 = 0;
    const COMPRESSION_JBIG2 = 0;
    const INTERLACE_NONE = 0;
    const INTERLACE_LINE = 0;
    const INTERLACE_PLANE = 0;
    const INTERLACE_PARTITION = 0;
    const PAINT_POINT = 0;
    const PAINT_REPLACE = 0;
    const PAINT_FLOODFILL = 0;
    const PAINT_FILLTOBORDER = 0;
    const PAINT_RESET = 0;
    const GRAVITY_NORTHWEST = 0;
    const GRAVITY_NORTH = 0;
    const GRAVITY_NORTHEAST = 0;
    const GRAVITY_WEST = 0;
    const GRAVITY_CENTER = 0;
    const GRAVITY_EAST = 0;
    const GRAVITY_SOUTHWEST = 0;
    const GRAVITY_SOUTH = 0;
    const GRAVITY_SOUTHEAST = 0;
    const STRETCH_NORMAL = 0;
    const STRETCH_ULTRACONDENSED = 0;
    const STRETCH_CONDENSED = 0;
    const STRETCH_SEMICONDENSED = 0;
    const STRETCH_SEMIEXPANDED = 0;
    const STRETCH_EXPANDED = 0;
    const STRETCH_EXTRAEXPANDED = 0;
    const STRETCH_ULTRAEXPANDED = 0;
    const STRETCH_ANY = 0;
    const STRETCH_EXTRACONDENSED = 0;
    const ALIGN_UNDEFINED = 0;
    const ALIGN_LEFT = 0;
    const ALIGN_CENTER = 0;
    const ALIGN_RIGHT = 0;
    const DECORATION_NO = 0;
    const DECORATION_UNDERLINE = 0;
    const DECORATION_OVERLINE = 0;
    const DECORATION_LINETROUGH = 0;
    const NOISE_UNIFORM = 0;
    const NOISE_GAUSSIAN = 0;
    const NOISE_MULTIPLICATIVEGAUSSIAN = 0;
    const NOISE_IMPULSE = 0;
    const NOISE_LAPLACIAN = 0;
    const NOISE_POISSON = 0;
    const NOISE_RANDOM = 0;
    const CHANNEL_UNDEFINED = 0;
    const CHANNEL_RED = 0;
    const CHANNEL_GRAY = 0;
    const CHANNEL_CYAN = 0;
    const CHANNEL_GREEN = 0;
    const CHANNEL_MAGENTA = 0;
    const CHANNEL_BLUE = 0;
    const CHANNEL_YELLOW = 0;
    const CHANNEL_OPACITY = 0;
    const CHANNEL_MATTE = 0;
    const CHANNEL_BLACK = 0;
    const CHANNEL_INDEX = 0;
    const CHANNEL_ALL = 0;
    const CHANNEL_DEFAULT = 0;
    const METRIC_UNDEFINED = 0;
    const METRIC_MEANABSOLUTEERROR = 0;
    const METRIC_MEANSQUAREERROR = 0;
    const METRIC_PEAKABSOLUTEERROR = 0;
    const METRIC_PEAKSIGNALTONOISERATIO = 0;
    const METRIC_ROOTMEANSQUAREDERROR = 0;
    const PIXEL_CHAR = 0;
    const PIXEL_DOUBLE = 0;
    const PIXEL_FLOAT = 0;
    const PIXEL_INTEGER = 0;
    const PIXEL_LONG = 0;
    const PIXEL_SHORT = 0;
    const COLORSPACE_UNDEFINED = 0;
    const COLORSPACE_RGB = 0;
    const COLORSPACE_GRAY = 0;
    const COLORSPACE_TRANSPARENT = 0;
    const COLORSPACE_OHTA = 0;
    const COLORSPACE_LAB = 0;
    const COLORSPACE_XYZ = 0;
    const COLORSPACE_YCBCR = 0;
    const COLORSPACE_YCC = 0;
    const COLORSPACE_YIQ = 0;
    const COLORSPACE_YPBPR = 0;
    const COLORSPACE_YUV = 0;
    const COLORSPACE_CMYK = 0;
    const COLORSPACE_SRGB = 0;
    const COLORSPACE_HSL = 0;
    const COLORSPACE_HWB = 0;
    const COLORSPACE_REC601LUMA = 0;
    const COLORSPACE_REC709LUMA = 0;
    const COLORSPACE_CINEONLOGRGB = 0;
    const COLORSPACE_REC601YCBCR = 0;
    const COLORSPACE_REC709YCBCR = 0;
    const VIRTUALPIXELMETHOD_UNDEFINED = 0;
    const VIRTUALPIXELMETHOD_CONSTANT = 0;
    const VIRTUALPIXELMETHOD_EDGE = 0;
    const VIRTUALPIXELMETHOD_MIRROR = 0;
    const VIRTUALPIXELMETHOD_TILE = 0;
    const PREVIEW_UNDEFINED = 0;
    const PREVIEW_ROTATE = 0;
    const PREVIEW_SHEAR = 0;
    const PREVIEW_ROLL = 0;
    const PREVIEW_HUE = 0;
    const PREVIEW_SATURATION = 0;
    const PREVIEW_BRIGHTNESS = 0;
    const PREVIEW_GAMMA = 0;
    const PREVIEW_SPIFF = 0;
    const PREVIEW_DULL = 0;
    const PREVIEW_GRAYSCALE = 0;
    const PREVIEW_QUANTIZE = 0;
    const PREVIEW_DESPECKLE = 0;
    const PREVIEW_REDUCENOISE = 0;
    const PREVIEW_ADDNOISE = 0;
    const PREVIEW_SHARPEN = 0;
    const PREVIEW_BLUR = 0;
    const PREVIEW_THRESHOLD = 0;
    const PREVIEW_EDGEDETECT = 0;
    const PREVIEW_SPREAD = 0;
    const PREVIEW_SOLARIZE = 0;
    const PREVIEW_SHADE = 0;
    const PREVIEW_RAISE = 0;
    const PREVIEW_SEGMENT = 0;
    const PREVIEW_SWIRL = 0;
    const PREVIEW_IMPLODE = 0;
    const PREVIEW_WAVE = 0;
    const PREVIEW_OILPAINT = 0;
    const PREVIEW_CHARCOALDRAWING = 0;
    const PREVIEW_JPEG = 0;
    const RENDERINGINTENT_UNDEFINED = 0;
    const RENDERINGINTENT_SATURATION = 0;
    const RENDERINGINTENT_PERCEPTUAL = 0;
    const RENDERINGINTENT_ABSOLUTE = 0;
    const RENDERINGINTENT_RELATIVE = 0;
    const INTERLACE_UNDEFINED = 0;
    const INTERLACE_NO = 0;
    const FILLRULE_UNDEFINED = 0;
    const FILLRULE_EVENODD = 0;
    const FILLRULE_NONZERO = 0;
    const PATHUNITS_USERSPACE = 0;
    const PATHUNITS_USERSPACEONUSE = 0;
    const PATHUNITS_OBJECTBOUNDINGBOX = 0;
    const LINECAP_UNDEFINED = 0;
    const LINECAP_BUTT = 0;
    const LINECAP_ROUND = 0;
    const LINECAP_SQUARE = 0;
    const LINEJOIN_UNDEFINED = 0;
    const LINEJOIN_MITER = 0;
    const LINEJOIN_ROUND = 0;
    const LINEJOIN_BEVEL = 0;
    const RESOURCETYPE_UNDEFINED = 0;
    const RESOURCETYPE_AREA = 0;
    const RESOURCETYPE_DISK = 0;
    const RESOURCETYPE_FILE = 0;
    const RESOURCETYPE_MAP = 0;
    const RESOURCETYPE_MEMORY = 0;
    const RESOURCETYPE_PIXELS = 0;
    const RESOURCETYPE_THREADS = 0;
    const RESOURCETYPE_WIDTH = 0;
    const RESOURCETYPE_HEIGHT = 0;
    const DISPOSE_UNDEFINED = 0;
    const DISPOSE_NONE = 0;
    const DISPOSE_BACKGROUND = 0;
    const DISPOSE_PREVIOUS = 0;
    const ORIENTATION_UNDEFINED = 0;
    const ORIENTATION_TOPLEFT = 0;
    const ORIENTATION_TOPRIGHT = 0;
    const ORIENTATION_BOTTOMRIGHT = 0;
    const ORIENTATION_BOTTOMLEFT = 0;
    const ORIENTATION_LEFTTOP = 0;
    const ORIENTATION_RIGHTTOP = 0;
    const ORIENTATION_RIGHTBOTTOM = 0;
    const ORIENTATION_LEFTBOTTOM = 0;
    const QUANTUM_DEPTH = 0;
    const QUANTUM = 0;
    const VERSION_LIB = 0;
    const VERSION_NUM = 0;
    const VERSION_TXT = '';
    public function __construct($filename = null)
    {
    }
    public function addimage($Gmagick)
    {
    }
    public function addnoiseimage($NOISE)
    {
    }
    public function annotateimage($GmagickDraw, $x, $y, $angle, $text)
    {
    }
    public function blurimage($radius, $sigma, $channel = null)
    {
    }
    public function borderimage($color, $width, $height)
    {
    }
    public function charcoalimage($radius, $sigma)
    {
    }
    public function chopimage($width, $height, $x, $y)
    {
    }
    public function clear()
    {
    }
    public function commentimage($comment)
    {
    }
    public function compositeimage($source, $COMPOSE, $x, $y)
    {
    }
    public function cropimage($width, $height, $x, $y)
    {
    }
    public function cropthumbnailimage($width, $height)
    {
    }
    public function current()
    {
    }
    public function cyclecolormapimage($displace)
    {
    }
    public function deconstructimages()
    {
    }
    public function despeckleimage()
    {
    }
    public function destroy()
    {
    }
    public function drawimage($GmagickDraw)
    {
    }
    public function edgeimage($radius)
    {
    }
    public function embossimage($radius, $sigma)
    {
    }
    public function enhanceimage()
    {
    }
    public function equalizeimage()
    {
    }
    public function flipimage()
    {
    }
    public function flopimage()
    {
    }
    public function frameimage($color, $width, $height, $inner_bevel, $outer_bevel)
    {
    }
    public function gammaimage($gamma)
    {
    }
    public function getcopyright()
    {
    }
    public function getfilename()
    {
    }
    public function getimagebackgroundcolor()
    {
    }
    public function getimageblueprimary()
    {
    }
    public function getimagebordercolor()
    {
    }
    public function getimagechanneldepth($channel_type)
    {
    }
    public function getimagecolors()
    {
    }
    public function getimagecolorspace()
    {
    }
    public function getimagecompose()
    {
    }
    public function getimagedelay()
    {
    }
    public function getimagedepth()
    {
    }
    public function getimagedispose()
    {
    }
    public function getimageextrema()
    {
    }
    public function getimagefilename()
    {
    }
    public function getimageformat()
    {
    }
    public function getimagegamma()
    {
    }
    public function getimagegreenprimary()
    {
    }
    public function getimageheight()
    {
    }
    public function getimagehistogram()
    {
    }
    public function getimageindex()
    {
    }
    public function getimageinterlacescheme()
    {
    }
    public function getimageiterations()
    {
    }
    public function getimagematte()
    {
    }
    public function getimagemattecolor()
    {
    }
    public function getimageprofile($name)
    {
    }
    public function getimageredprimary()
    {
    }
    public function getimagerenderingintent()
    {
    }
    public function getimageresolution()
    {
    }
    public function getimagescene()
    {
    }
    public function getimagesignature()
    {
    }
    public function getimagetype()
    {
    }
    public function getimageunits()
    {
    }
    public function getimagewhitepoint()
    {
    }
    public function getimagewidth()
    {
    }
    public function getpackagename()
    {
    }
    public function getquantumdepth()
    {
    }
    public function getreleasedate()
    {
    }
    public function getsamplingfactors()
    {
    }
    public function getsize()
    {
    }
    public function getversion()
    {
    }
    public function hasnextimage()
    {
    }
    public function haspreviousimage()
    {
    }
    public function implodeimage($radius)
    {
    }
    public function labelimage($label)
    {
    }
    public function levelimage($blackPoint, $gamma, $whitePoint, $channel = false)
    {
    }
    public function magnifyimage()
    {
    }
    public function mapimage($gmagick, $dither)
    {
    }
    public function medianfilterimage($radius)
    {
    }
    public function minifyimage()
    {
    }
    public function modulateimage($brightness, $saturation, $hue)
    {
    }
    public function motionblurimage($radius, $sigma, $angle)
    {
    }
    public function newimage($width, $height, $background, $format = null)
    {
    }
    public function nextimage()
    {
    }
    public function normalizeimage($channel = null)
    {
    }
    public function oilpaintimage($radius)
    {
    }
    public function previousimage()
    {
    }
    public function profileimage($name, $profile)
    {
    }
    public function quantizeimage($numColors, $colorspace, $treeDepth, $dither, $measureError)
    {
    }
    public function quantizeimages($numColors, $colorspace, $treeDepth, $dither, $measureError)
    {
    }
    public function queryfontmetrics($draw, $text)
    {
    }
    public function queryfonts($pattern = '*')
    {
    }
    public function queryformats($pattern = '*')
    {
    }
    public function radialblurimage($angle, $channel = Gmagick::CHANNEL_DEFAULT)
    {
    }
    public function raiseimage($width, $height, $x, $y, $raise)
    {
    }
    public function read($filename)
    {
    }
    public function readimage($filename)
    {
    }
    public function readimageblob($imageContents, $filename = null)
    {
    }
    public function readimagefile($fp, $filename = null)
    {
    }
    public function reducenoiseimage($radius)
    {
    }
    public function removeimage()
    {
    }
    public function removeimageprofile($name)
    {
    }
    public function resampleimage($xResolution, $yResolution, $filter, $blur)
    {
    }
    public function resizeimage($width, $height, $filter, $blur, $fit = false)
    {
    }
    public function rollimage($x, $y)
    {
    }
    public function rotateimage($color, $degrees)
    {
    }
    public function scaleimage($width, $height, $fit = false)
    {
    }
    public function separateimagechannel($channel)
    {
    }
    public function setCompressionQuality($quality = 75)
    {
    }
    public function setfilename($filename)
    {
    }
    public function setimagebackgroundcolor($color)
    {
    }
    public function setimageblueprimary($x, $y)
    {
    }
    public function setimagebordercolor(GmagickPixel $color)
    {
    }
    public function setimagechanneldepth($channel, $depth)
    {
    }
    public function setimagecolorspace($colorspace)
    {
    }
    public function setimagecompose($composite)
    {
    }
    public function setimagedelay($delay)
    {
    }
    public function setimagedepth($depth)
    {
    }
    public function setimagedispose($disposeType)
    {
    }
    public function setimagefilename($filename)
    {
    }
    public function setimageformat($imageFormat)
    {
    }
    public function setimagegamma($gamma)
    {
    }
    public function setimagegreenprimary($x, $y)
    {
    }
    public function setimageindex($index)
    {
    }
    public function setimageinterlacescheme($interlace)
    {
    }
    public function setimageiterations($iterations)
    {
    }
    public function setimageprofile($name, $profile)
    {
    }
    public function setimageredprimary($x, $y)
    {
    }
    public function setimagerenderingintent($rendering_intent)
    {
    }
    public function setimageresolution($xResolution, $yResolution)
    {
    }
    public function setimagescene($scene)
    {
    }
    public function setimagetype($imgType)
    {
    }
    public function setimageunits($resolution)
    {
    }
    public function setimagewhitepoint($x, $y)
    {
    }
    public function setsamplingfactors($factors)
    {
    }
    public function setsize($columns, $rows)
    {
    }
    public function shearimage($color, $xShear, $yShear)
    {
    }
    public function solarizeimage($threshold)
    {
    }
    public function spreadimage($radius)
    {
    }
    public function stripimage()
    {
    }
    public function swirlimage($degrees)
    {
    }
    public function thumbnailimage($width, $height, $fit = false)
    {
    }
    public function trimimage($fuzz)
    {
    }
    public function write($filename)
    {
    }
    public function writeimage($filename, $all_frames = false)
    {
    }
}
class GmagickDraw
{
    public function annotate($x, $y, $text)
    {
    }
    public function arc($sx, $sy, $ex, $ey, $sd, $ed)
    {
    }
    public function bezier(array $coordinate_array)
    {
    }
    public function ellipse($ox, $oy, $rx, $ry, $start, $end)
    {
    }
    public function getfillcolor()
    {
    }
    public function getfillopacity()
    {
    }
    public function getfont()
    {
    }
    public function getfontsize()
    {
    }
    public function getfontstyle()
    {
    }
    public function getfontweight()
    {
    }
    public function getstrokecolor()
    {
    }
    public function getstrokeopacity()
    {
    }
    public function getstrokewidth()
    {
    }
    public function gettextdecoration()
    {
    }
    public function gettextencoding()
    {
    }
    public function line($sx, $sy, $ex, $ey)
    {
    }
    public function point($x, $y)
    {
    }
    public function polygon(array $coordinates)
    {
    }
    public function polyline(array $coordinate_array)
    {
    }
    public function rectangle($x1, $y1, $x2, $y2)
    {
    }
    public function rotate($degrees)
    {
    }
    public function roundrectangle($x1, $y1, $x2, $y2, $rx, $ry)
    {
    }
    public function scale($x, $y)
    {
    }
    public function setfillcolor($color)
    {
    }
    public function setfillopacity($fill_opacity)
    {
    }
    public function setfont($font)
    {
    }
    public function setfontsize($pointsize)
    {
    }
    public function setfontstyle($style)
    {
    }
    public function setfontweight($weight)
    {
    }
    public function setstrokecolor($color)
    {
    }
    public function setstrokeopacity($stroke_opacity)
    {
    }
    public function setstrokewidth($width)
    {
    }
    public function settextdecoration($decoration)
    {
    }
    public function settextencoding($encoding)
    {
    }
}
class GmagickException extends \Exception
{
}
class GmagickPixel
{
    public function __construct($color = null)
    {
    }
    public function getcolor($as_array = null, $normalize_array = null)
    {
    }
    public function getcolorcount()
    {
    }
    public function getcolorvalue($color)
    {
    }
    public function setcolor($color)
    {
    }
    public function setcolorvalue($color, $value)
    {
    }
}
class GmagickPixelException extends \Exception
{
}
