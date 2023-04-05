
                                // function copyContent(elementId) {
                                //     // Get the content of the element by ID
                                //     const element = document.getElementById(elementId);
                                //     const content = element.textContent;

                                //     // Create a new temporary textarea element
                                //     const textarea = document.createElement('textarea');
                                //     textarea.value = content;
                                //     textarea.setAttribute('readonly', '');
                                //     textarea.style.position = 'absolute';
                                //     textarea.style.left = '-9999px';

                                //     // Add the textarea element to the document
                                //     document.body.appendChild(textarea);

                                //     // Select the content of the textarea and copy it to the clipboard
                                //     textarea.select();
                                //     document.execCommand('copy');

                                //     // Remove the temporary textarea element from the document
                                //     document.body.removeChild(textarea);
                                // }

                                ///////////////////////////////////////
                                function copyContent(elementId) {
                                    const element = document.getElementById(elementId);
                                    const content = element.textContent;
                                    element.select();
                                    document.execCommand("copy");
                                    window.getSelection().removeAllRanges();
                                }
