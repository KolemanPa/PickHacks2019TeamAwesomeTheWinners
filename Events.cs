// Using these to get needed functions and for timing.
using System.Diagnostics;
using System;
using System.IO;
using System.Collections.Generic;
using System.Windows.Browser;

// setting up the projects space for possible use later.
namespace Sports
{
  // setting the the class for the problem.
  class Manage
  {
    // the html page
    HtmlDocument hdoc;

    /* this function takes in the sport and the location (zip) and compares them
     * with another set of a sport and a location (zip)
     * input sport: the name of the sport as a string.
     * input zip: the zip of the address as a string.
     * input sport2: the name of the sport as a string.
     * input zip2: the zip of the address as a string.
     * returns: a boolean, true if they are both the same, false if they aren't.
     */
    public float match(string sport, string zip, string sport2, string zip2) {
      bool match = true;
      if (sport.CompareTo(sport2) != 0) {
        match = false;
      }
      if (zip.CompareTo(zip2) != 0) {
        match = false;
      }
      return match;
    }
  }
}
