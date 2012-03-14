<?php

/**
 * Interface encompassing all optional and required fields for an opengraph object.
 * This interface is intended mostly be used as documentation for optional fields. Any fields in this can be
 * used in an {@see IOGObject} implementation also, but are not mandatory.
 * @author Damian Mooyman
 * @see IOGObject
 */
interface IOGObjectExplicit extends IOGObject
{
    /**
     * Any attached audio files
     * @return File[]|File
     */
    function OGAudio();
    
    /**
     * Any attached video files
     * @return File[]|File
     */
    function OGVideo();
    
    /**
     * Description for this opengraph object
     * @return string The description 
     */
    function getOGDescription();
    
    /**
     * The word that appears before this object's title in a sentence. 
     * An enum of (a, an, the, "", auto). If auto is chosen, the 
     * consumer of your data should chose between "a" or "an". 
     * Default is "" (blank).
     * @return string The determiner
     */
    function getOGDeterminer();
    
    /**
     * The locale(s) the opengraph tags are marked up in. Of the format language_TERRITORY. Default is en_US. 
     * @return string[]|string The list of all locales given, or the sole locale. If multiple values are given the first
     * is treated as the default.
     */
    function getOGLocales();
    
    /**
     * The name of this site
     * @return string The site name 
     */
    function getOGSiteName();
}