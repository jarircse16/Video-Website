// src/components/VideoList.js

import React from 'react';

const VideoList = () => {
  // Replace the URL with your own website URL
  const siteUrl = 'http://127.0.0.1:8000';

  return (
    <div>
      <iframe title="" src={siteUrl} width="100%" height="600px" frameBorder="0"></iframe>
    </div>
  );
};

export default VideoList;
